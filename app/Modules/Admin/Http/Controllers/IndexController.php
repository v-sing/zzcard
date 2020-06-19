<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-15
 * Time: 17:31
 */

namespace App\Modules\Admin\Http\Controllers;



use App\Modules\Model\Admin;
use App\Modules\Model\File;
use App\Modules\Model\Menu;
use App\Modules\Model\Role;
use App\Modules\Model\RoleMenu;
use App\Modules\Service\MenuService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class IndexController extends Controller
{
    public function index()
    {

        $menu = session('menu') ?? [];
        return view('admin::index.index', ['menu' => $menu]);
    }

    public function welcome()
    {
        $list = File::selectRaw('count(*) as sum')->get();
        return view('admin::admin.welcome', ['list' => $list]);
    }

    /**
     * 添加管理员
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:04
     */
    public function add(Request $request)
    {
        $id    = $request->input('id');
        $model = Admin::firstOrNew(['id' => $id]);
        $data  = $request->only(['name', 'email', 'role_id', 'true_name']);
        if (Admin::where('id', '<>', $id)->where('name', $data['name'])->first()) {
            return $this->error('帐号已存在！');
        }
        $data['password'] = encrypt($request->input('password'));
        $model->fill($data);
//        dd($model);
        if ($model->save()) {
            return $this->success('操作成功！', [], "/admin/admin/list");
        } else {
            return $this->error('操作失败！');
        }
    }

    /**
     * 获取帐号
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:06
     */
    public function get(Request $request)
    {
        $admin = Admin::firstOrNew(['id' => $request->input('id')]);
        $roles = Role::get();
        return view('admin::admin.add', ['admin' => $admin, 'roles' => $roles]);
    }

    /**
     * 修改密码
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author 此処　email1946367301@163.com
     * @date 2019/10/8 15:57
     */
    public function passwordEdit(Request $request)
    {
        $id    = session('user.id');
        $model = Admin::find($id);
        if (decrypt($model->password) != $request->input('old_password')) {
            return $this->error('原密码错误！');
        }
        $model->password = encrypt($request->input('password'));
        $model->email    = $request->input('email');
        if ($model->save()) {
            \Auth::logout();
            return $this->success('操作成功！', [], "/login");
        } else {
            return $this->error('操作失败！');
        }

    }

    /**
     * 管理员列表
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:07
     */
    public function list(Request $request)
    {
        $key  = $request->input('key');
        $list = Admin::with('role')->where('name', 'like', "%{$key}%")->get();
        return view('admin::admin.list', ['list' => $list]);
    }

    /**
     * 账号的停用与启用
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:07
     */
    public function stop(Request $request)
    {
        $id            = $request->input('id');
        $admin         = Admin::find($id);
        $admin->status = $request->input('status');
        if ($admin->save()) {
            return $this->success();
        } else {
            return $this->error();
        }
    }

    /**
     * 账号删除
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:07
     */
    public function del(Request $request)
    {
        $id = $request->input('id');
        if (Admin::destroy($id)) {
            return $this->success();
        } else {
            return $this->error();
        }
    }


}