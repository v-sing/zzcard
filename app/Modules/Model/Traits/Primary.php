<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-19
 * Time: 15:04
 */

namespace App\Modules\Model\Traits;


trait Primary
{
    /**
     * 获取处理后的主键值
     * @return string
     *
     */
    public function getPrimaryId()
    {
        $table = $this->getTable();
        $id    = $this->primaryKey;
        $key   = config('table.' . $table . '.' . $id);
        return str_pad($this->getKey(), $key, '0', STR_PAD_LEFT);
    }
}