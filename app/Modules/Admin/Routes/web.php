<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//'middleware' => 'admin',
Route::group(['middleware' => 'admin','prefix' => 'admin'], function () {

    Route::get('/index','IndexController@index');
//    Route::get('/welcome','IndexController@welcome');
    //角色添加
    Route::get('/role/add', 'RoleController@get');
    Route::post('/role/add', 'RoleController@add');
    //角色列表
    Route::get('/role/list', "RoleController@list");
    //角色删除
    Route::get('/role/del', "RoleController@del");
    //角色授权
    Route::get('/role/setMenu', 'RoleController@setMenu');
    Route::post('/role/setMenu', 'RoleController@setMenuDo');

    //菜单列表
    Route::get('/menu/list', 'MenuController@list');
    //添加菜单
    Route::get('/menu/edit', 'MenuController@get');
    Route::post('/menu/edit', 'MenuController@edit');
    //更改菜单顺序和层次
    Route::post('/menu/editSort', 'MenuController@editSort');
    //删除菜单
    Route::post('/menu/del', 'MenuController@del');

    //账号列表
    Route::get('/admin/list', 'IndexController@list');
    Route::get('/admin/list', 'IndexController@list');
    //帐号添加
    Route::get('/admin/add', 'IndexController@get');
    Route::post('/admin/add', 'IndexController@add');
    //修改密码
    Route::get('/admin/password', function () {
        return view('admin::admin.password');
    });
    Route::post('/admin/password', 'IndexController@passwordEdit');

    //帐号停用启用
    Route::post('/admin/stop', 'IndexController@stop');
    //账号删除
    Route::post('/admin/del', 'IndexController@del');
    //图片列表
    Route::get('/file/list', 'FileController@list');
    Route::post('/file/delete_img', 'FileController@delete_img');
    Route::get('/log/list', 'LogController@list');
    Route::get('config/index','ConfigController@index');
    Route::post('config/add','ConfigController@addField');
    Route::post('config/edit','ConfigController@editField');
    Route::post('config/del','ConfigController@delField');

    //商户
    Route::get('/panter/list','PanterController@list');

});

Route::get('/welcome','IndexController@welcome');
Route::get('/panter/list','PanterController@list');
Route::get('/panter/add','PanterController@add');
