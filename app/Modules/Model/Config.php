<?php

namespace App\Modules\Model;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * App\Modules\Model\Config
 *
 * @property int $ID
 * @property string|null $CRUX_GROUP 分组
 * @property string|null $TITLE 变量标题
 * @property string|null $NAME 变量名
 * @property string|null $CRUX_VALUE 变量名
 * @property string|null $TIP 描述
 * @property string|null $TYPE 类型:string,text,bool,array,checkbox,radio,sgin
 * @property string|null $CRUX_RULE 验证规则正则
 * @property string|null $EXTEND 扩展属性
 * @property string|null $CONTENT 数据列表
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property string|null $DELETED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCONTENT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCRUXGROUP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCRUXRULE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereCRUXVALUE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereDELETEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereEXTEND($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTITLE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereTYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Config whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
class Config extends Model
{
    use SoftDeletes;
    //
    protected $guarded = [];

    //批量更新
    public function updateBatch($multipleData = [])
    {
        try {
            if (empty($multipleData)) {
                throw new \Exception("数据不能为空");
            }
            $tableName = DB::getTablePrefix() . $this->getTable(); // 表名
            $firstRow  = current($multipleData);

            $updateColumn = array_keys($firstRow);
            // 默认以id为条件更新，如果没有ID则以第一个字段为条件
            $referenceColumn = isset($firstRow['id']) ? 'id' : current($updateColumn);
            unset($updateColumn[0]);
            // 拼接sql语句
            $updateSql = "UPDATE " . $tableName . " SET ";
            $sets      = [];
            $bindings  = [];
            foreach ($updateColumn as $uColumn) {
                $setSql = "`" . $uColumn . "` = CASE ";
                foreach ($multipleData as $data) {
                    $setSql     .= "WHEN `" . $referenceColumn . "` = ? THEN ? ";
                    $bindings[] = $data[$referenceColumn];
                    $bindings[] = $data[$uColumn];
                }
                $setSql .= "ELSE `" . $uColumn . "` END ";
                $sets[] = $setSql;
            }
            $updateSql .= implode(', ', $sets);
            $whereIn   = collect($multipleData)->pluck($referenceColumn)->values()->all();
            $bindings  = array_merge($bindings, $whereIn);
            $whereIn   = rtrim(str_repeat('?,', count($whereIn)), ',');
            $updateSql = rtrim($updateSql, ", ") . " WHERE `" . $referenceColumn . "` IN (" . $whereIn . ")";
            // 传入预处理sql语句和对应绑定数据
            $sql=DB::update($updateSql, $bindings);
            return $sql;
        } catch (\Exception $e) {
            return false;
        }
    }
}
