<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-18
 * Time: 14:04
 */

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Repositories\ConfigRepositories;
use Illuminate\Http\Request;

/**
 * 平台管理
 * Class ConfigController
 * @package App\Http\Controllers\Admin
 */
class ConfigController extends Controller
{

    private $configRepositories;

    public function __construct(ConfigRepositories $configRepositories)
    {
         $this->configRepositories =$configRepositories;
    }

    /**
     * 平台管理页面
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = $this->configRepositories->list($request);
        return view('admin::config.index', $data);
    }

    /**
     * 添加字段
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addField(Request $request)
    {
        try {
            if ($this->configRepositories->addField($request)) {
                return $this->success('操作成功！');
            } else {
                return $this->error('操作失败！');
            }
        } catch (\Throwable $exception) {
            return $this->error($exception->getMessage());
        }
    }

    /**
     * 编辑
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function editField(Request $request)
    {
        try {
            if ($this->configRepositories->editGroup($request)) {
                return $this->success('操作成功！');
            } else {
                return $this->error('操作失败！');
            }
        } catch (\Throwable $exception) {
            return $this->error($exception->getMessage());
        }
    }

    /**
     * 删除
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delField(Request $request)
    {
        try {
            if ($this->configRepositories->delField($request)) {
                return $this->success('操作成功！');
            } else {
                return $this->error('操作失败！');
            }
        } catch (\Throwable $exception) {
            return $this->error($exception->getMessage());
        }
    }
}
