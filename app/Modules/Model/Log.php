<?php

namespace App\Modules\Model;

use App\Modules\Model\Traits\Search;
use App\Modules\Model\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Log
 *
 * @property int $ID
 * @property int $ADMIN_ID 操作人
 * @property string $URL 操作url
 * @property string $NAME 操作
 * @property string $METHOD 请求方式
 * @property string $REQUEST 请求信息
 * @property string $IP IP地址
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereADMINID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereMETHOD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereREQUEST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereUPDATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log whereURL($value)
 * @mixin \Eloquent
 * @property-read \App\Modules\Model\Admin $admin
 * @property-read mixed $admin_name
 * @property-write mixed $request
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Log search($where)
 */
class Log extends Model
{
    use Timestamp, Search;

    protected $guarded = [];
    protected $casts = ['created_at' => 'datetime:Y-m-d H:i:s'];
    protected $appends = ['admin_name'];
    protected $hidden = ['admin'];
    protected $searchEqual = ['method'];
    protected $searchLike = ['url', 'request', 'ip'];
    protected $searchTime = ['created_at'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function setRequestAttribute($value)
    {
        $this->attributes['request'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function getAdminNameAttribute($value)
    {
        return $this->admin->name;
    }

}
