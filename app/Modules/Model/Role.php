<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Role
 *
 * @property int $ID
 * @property string $ROLE_NAME
 * @property string $REMARK
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereREMARK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereROLENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Role whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    protected $guarded = [];

    //

    protected $fillable=[
        'role_name','remark'
    ];
}
