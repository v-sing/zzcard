<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Modules\Model\Admin;
use App\Modules\Model\Menu;
use App\Modules\Model\RoleMenu;
use App\Modules\Service\MenuService;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ='admin/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin::login.login');
    }
    /**
     * 登录
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:03
     */
    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $user = Admin::where('name', $name)->first();
        if (!$user) {
            return $this->error('账号不存在！');
        }
        if ($password != decrypt($user->password)) {
            return $this->error('账号密码错误！');
        }
        if ($user->status == 0) {
            return $this->error('帐号未启用！');
        }
        auth('web')->login($user);
        $menu_ids = RoleMenu::where(['role_id' => $user->role_id])->pluck('menu_id')->toArray();
        $urls = Menu::whereIn('id', $menu_ids)->pluck('url')->toArray();
        $menu = MenuService::getMenu(0, $menu_ids);
        $memu_list= Menu::whereIn('id',$menu_ids)->orderBy('crux_sort', 'asc')->where('is_show', 1)->get()->toArray();
        session(['menu' => $menu,'memu_list'=>$memu_list, 'user' => $user->toArray(), 'menu_ids' => $menu_ids, 'urls' => $urls]);
        return $this->success('登录成功！');
    }

    /**
     * 退出
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:03
     */
    public function logout(Request $request)
    {
        \Auth::logout();
        return redirect('login');
    }
}
