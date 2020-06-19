<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-06-18
 * Time: 11:18
 */

use App\Modules\Service\MenuService;
use Illuminate\Support\Facades\DB;

if (!function_exists('')) {
    /**
     * 面包屑导航
     * @param string $path
     * @return string
     */
    function breadCrumb($path = '')
    {
        return MenuService::breadCrumb($path);
    }

}

if (!function_exists('columnChangeDataType')) {

    /**
     * 更改主键类型与长度
     * @param $table
     * @param $column
     * @param $dataType
     * @param $lenght
     * @return int
     */
    function columnChangeDataType($table, $column, $dataType,$lenght)
    {
        $prefix = env('DB_PREFIX', '');

      $create=  "create or replace trigger {$prefix}{$table}_{$column}_trg
            before insert on {$prefix}{$table}
            for each row
                begin
            if :new.{$column} is null then
                select lpad({$prefix}{$table}_{$column}_seq.nextval,{$lenght},'0') into :new.{$column} from dual;
            end if;
            end;";
        DB::update($create);
        return DB::update("alter table {$prefix}{$table}  modify ( {$column} {$dataType})");
    }

}