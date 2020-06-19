<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success($msg = '成功！', $data = [], $url = -1, $code = 0, $status = 'success')
    {
        return response()->json([
            'code' => $code,
            'status' => $status,
            'msg' => $msg,
            'data' => $this->delNull($data),
            'url' => $url,
        ]);
    }

    /**
     * 动态table返回ajax数据
     * @param $list
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     * @author 此処　email1946367301@163.com
     * @date 2020/5/11 10:15
     */
    public function tableAjax($list, $data = [])
    {
        $data = array_merge([
            'code' => 0,
            'msg' => '成功',
            'data' => $list->items(),
            'count' => $list->total(),
        ], $data);
        return response()->json($data);
    }

    private function delNull($arr)
    {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $arr[$key] = $this->delNull($value);
            } else {
                $arr[$key] = $value ?? '';
            }
        }

        return $arr;
    }

    public function error($msg = '失败！', $code = 400, $status = 'error')
    {
        return response()->json(['code' => $code, 'status' => $status, 'msg' => $msg]);
    }

}
