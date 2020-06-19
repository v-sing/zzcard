<?php

namespace App\Modules\Service;

use App\Modules\Model\Menu;

class MenuService
{
    static protected $pidname = 'pid';
    static protected $arr = [];

    /**
     * 获取菜单列表（菜单用）
     * @param int $pid
     * @param array $menus
     * @return array
     * @author 牛永光 <nyg199111@126.com>
     * @date 2019-07-17 23:11
     */
    static public function getMenu($pid = 0, $menus = [])
    {
        $list = Menu::where(['pid' => $pid])->orderBy('crux_sort', 'asc')->where('is_show', 1)->get()->toArray();
        $data = [];
        foreach ($list as $v) {
            if (in_array($v['id'], $menus)) {
                $tmp      = $v;
                $children = self::getMenu($v['id'], $menus);
                if ($children) {
                    $tmp['children'] = $children;
                }
                $data[] = $tmp;
            }
        }
        return $data;
    }

    /**
     * 获取菜单列表-树状图
     * @param $menus
     * @param array $checked
     * @return array
     * @author 此処　email1946367301@163.com
     * @date 2020/5/30 14:18
     */
    static function getMenuArr($menus, $checked = [])
    {
        $data = [];
        foreach ($menus as $v) {
            unset($tmp);
            $tmp['id']      = $v->id;
            $tmp['name']    = $v->menu_name;
            $tmp['checked'] = in_array($v->id, $checked);
            $tmp['_url']    = $v->url;
            $tmp['_icon']   = $v->icon;
            $tmp['_pid']    = $v->pid;
            $tmp['remark']  = $v->remark;
            $tmp['_show']   = $v->is_show;
            if (count($v->children) > 0) {
                $tmp['children'] = self::getMenuArr($v->children, $checked);
            }
            $data[] = $tmp;
        }
        return $data;
    }

    /**
     * 面包屑导航
     * @param string $path
     * @return string
     *
     */
    static public function breadCrumb($path = '')
    {

        if(!$path){
            $path=request()->path();
        }
        $path='/'.$path;
        $info=Menu::where(['url'=>$path])->first();
        $myid=$info->id;
        self::$arr = \Session::get('memu_list');
        $data      = self::getParents($myid, true);
        $beradCrumb = '  <span class="layui-breadcrumb" href="admin/index"> <a>首页</a>';
         foreach ($data as $item) {
            if ($myid == $item['id']) {
                $beradCrumb .= "<a>
              <cite>{$item['menu_name']}</cite>
             </a>";
            } else {
                $beradCrumb .= " <a href='{$item['url']}'>{$item['menu_name']}</a>";
            }
        }
        $beradCrumb .= '</span>';
        return $beradCrumb;
    }

    /**
     * 得到当前位置所有父辈数组
     * @param int
     * @param bool $withself 是否包含自己
     * @return array
     */
    static public function getParents($myid, $withself = false)
    {
        $pid    = 0;
        $newarr = [];
        foreach (self::$arr as $value) {
            if (!isset($value['id'])) {
                continue;
            }
            if ($value['id'] == $myid) {
                if ($withself) {
                    $newarr[] = $value;
                }
                $pid = $value[self::$pidname];
                break;
            }
        }
        if ($pid) {
            $arr    = self::getParents($pid, true);
            $newarr = array_merge($arr, $newarr);
        }
        return $newarr;
    }

}