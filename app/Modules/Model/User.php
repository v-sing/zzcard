<?php

namespace App\Modules\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Modules\Model\User
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL
 * @property string|null $EMAIL_VERIFIED_AT
 * @property string $PASSWORD
 * @property string|null $REMEMBER_TOKEN
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereEMAILVERIFIEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Modules\Model\User whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    //
}
