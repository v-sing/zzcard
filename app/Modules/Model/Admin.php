<?php

namespace App\Modules\Model;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * App\Modules\Model\Admin
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL 邮箱
 * @property int $STATUS 是否启用
 * @property int $ROLE_ID 所属角色
 * @property string $PASSWORD
 * @property string $TRUE_NAME 真实姓名
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property string|null $DELETED_AT
 * @property string|null $REMEMBER_TOKEN
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereDELETEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereROLEID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereSTATUS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereTRUENAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Admin whereUPDATEDAT($value)
 * @mixin \Eloquent
 * @property-read \App\Modules\Model\Role|null $role
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Model\Admin onlyTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Model\Admin withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Modules\Model\Admin withoutTrashed()
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 */
class Admin extends \Illuminate\Foundation\Auth\User
{
    //
    use SoftDeletes;
    use Notifiable;
    protected $guarded = [];

    /**
     * 获取角色名
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * @author 此処　email1946367301@163.com
     * @date 2019/9/6 16:11
     */
    public function role(){
        return $this->hasOne(Role::class,'id','role_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','email','role_id','true_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];


}
