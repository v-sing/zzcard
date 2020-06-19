<?php

namespace App\Modules\Model;

use App\Modules\Model\Traits\Primary;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\Panter
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter query()
 * @mixin \Eloquent
 * @property int $ID
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\Panter whereUPDATEDAT($value)
 */
class Panter extends Model
{
    use Primary;
    //
    protected $primaryKey='panterid';

    protected $guarded = [];

    protected $fillable=[
        'namechinese'
    ];
}
