<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => '1',
                'menu_name' => '权限管理',
                'crux_sort' => '17',
                'url' => '/admin/index',
                'icon' => '&#xe601;',
                'remark' => NULL,
                'pid' => '0',
                'is_show' => '1',
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 13:49:32',
            ),
            1 => 
            array (
                'id' => '2',
                'menu_name' => '角色管理',
                'crux_sort' => '1',
                'url' => '/admin/role/list',
                'icon' => '&#xe69e;',
                'remark' => NULL,
                'pid' => '1',
                'is_show' => '1',
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 15:55:01',
            ),
            2 => 
            array (
                'id' => '3',
                'menu_name' => '菜单管理',
                'crux_sort' => '2',
                'url' => '/admin/menu/list',
                'icon' => '&#xe604;',
                'remark' => NULL,
                'pid' => '1',
                'is_show' => '1',
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 15:55:11',
            ),
            3 => 
            array (
                'id' => '4',
                'menu_name' => '账号列表',
                'crux_sort' => '3',
                'url' => '/admin/admin/list',
                'icon' => '&#xe6da;',
                'remark' => NULL,
                'pid' => '1',
                'is_show' => '1',
                'created_at' => '2019-09-06 08:38:05',
                'updated_at' => '2020-05-28 15:55:36',
            ),
            4 => 
            array (
                'id' => '5',
                'menu_name' => '添加编辑菜单',
                'crux_sort' => '21',
                'url' => '/admin/menu/edit',
                'icon' => NULL,
                'remark' => NULL,
                'pid' => '3',
                'is_show' => '0',
                'created_at' => '2020-05-15 15:44:06',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            5 => 
            array (
                'id' => '6',
                'menu_name' => '拖动排序',
                'crux_sort' => '22',
                'url' => '/admin/menu/editsort',
                'icon' => NULL,
                'remark' => NULL,
                'pid' => '3',
                'is_show' => '0',
                'created_at' => '2020-05-15 15:44:36',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            6 => 
            array (
                'id' => '7',
                'menu_name' => '菜单删除',
                'crux_sort' => '23',
                'url' => '/admin/menu/del',
                'icon' => NULL,
                'remark' => NULL,
                'pid' => '3',
                'is_show' => '0',
                'created_at' => '2020-05-15 15:57:55',
                'updated_at' => '2020-05-28 13:49:20',
            ),
            7 => 
            array (
                'id' => '8',
                'menu_name' => '添加编辑角色',
                'crux_sort' => '2',
                'url' => '/admin/role/add',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '2',
                'is_show' => '0',
                'created_at' => '2020-06-19 12:24:14',
                'updated_at' => '2020-06-19 12:24:14',
            ),
            8 => 
            array (
                'id' => '20',
                'menu_name' => '配置删除',
                'crux_sort' => '1',
                'url' => '/admin/config/del',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '17',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:24:04',
                'updated_at' => '2020-06-19 13:24:04',
            ),
            9 => 
            array (
                'id' => '21',
                'menu_name' => '操作日志',
                'crux_sort' => '3',
                'url' => '/admin/log/list',
                'icon' => '&#xe795;',
                'remark' => ' ',
                'pid' => '16',
                'is_show' => '1',
                'created_at' => '2020-06-19 13:25:07',
                'updated_at' => '2020-06-19 13:37:39',
            ),
            10 => 
            array (
                'id' => '9',
                'menu_name' => '删除角色',
                'crux_sort' => '9',
                'url' => '/admin/role/del',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '2',
                'is_show' => '0',
                'created_at' => '2020-06-19 12:40:07',
                'updated_at' => '2020-06-19 12:40:07',
            ),
            11 => 
            array (
                'id' => '11',
                'menu_name' => '授权',
                'crux_sort' => '1',
                'url' => '/admin/role/setMenu',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '2',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:15:35',
                'updated_at' => '2020-06-19 13:15:35',
            ),
            12 => 
            array (
                'id' => '12',
                'menu_name' => '添加编辑账号',
                'crux_sort' => '2',
                'url' => '/admin/admin/add',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '4',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:16:14',
                'updated_at' => '2020-06-19 13:16:14',
            ),
            13 => 
            array (
                'id' => '13',
                'menu_name' => '修改个人密码',
                'crux_sort' => '2',
                'url' => '/admin/admin/password',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '4',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:16:50',
                'updated_at' => '2020-06-19 13:16:50',
            ),
            14 => 
            array (
                'id' => '14',
                'menu_name' => '账号停用启用',
                'crux_sort' => '3',
                'url' => '/admin/admin/stop',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '4',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:17:21',
                'updated_at' => '2020-06-19 13:17:21',
            ),
            15 => 
            array (
                'id' => '15',
                'menu_name' => '帐号删除',
                'crux_sort' => '3',
                'url' => '/admin/admin/del',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '4',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:17:54',
                'updated_at' => '2020-06-19 13:17:54',
            ),
            16 => 
            array (
                'id' => '16',
                'menu_name' => '系统管理',
                'crux_sort' => '100',
                'url' => '/admin',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '0',
                'is_show' => '1',
                'created_at' => '2020-06-19 13:18:55',
                'updated_at' => '2020-06-19 13:37:12',
            ),
            17 => 
            array (
                'id' => '17',
                'menu_name' => '系统配置',
                'crux_sort' => '1',
                'url' => '/admin/config/index',
                'icon' => '&#xe615;',
                'remark' => ' ',
                'pid' => '16',
                'is_show' => '1',
                'created_at' => '2020-06-19 13:19:49',
                'updated_at' => '2020-06-19 13:37:29',
            ),
            18 => 
            array (
                'id' => '18',
                'menu_name' => '配置添加',
                'crux_sort' => '1',
                'url' => '/admin/config/add',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '17',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:20:35',
                'updated_at' => '2020-06-19 13:20:35',
            ),
            19 => 
            array (
                'id' => '19',
                'menu_name' => '系统编辑',
                'crux_sort' => '2',
                'url' => '/admin/config/edit',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '17',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:22:17',
                'updated_at' => '2020-06-19 13:22:17',
            ),
            20 => 
            array (
                'id' => '22',
                'menu_name' => '公共节点',
                'crux_sort' => '101',
                'url' => '/',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '0',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:27:10',
                'updated_at' => '2020-06-19 13:27:10',
            ),
            21 => 
            array (
                'id' => '23',
                'menu_name' => '文件上传',
                'crux_sort' => '2',
                'url' => '/admin/api/upload',
                'icon' => ' ',
                'remark' => ' ',
                'pid' => '22',
                'is_show' => '0',
                'created_at' => '2020-06-19 13:27:49',
                'updated_at' => '2020-06-19 13:27:49',
            ),
        ));
        
        
    }
}