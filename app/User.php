<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\User
 *
 * @property int $ID
 * @property string $NAME
 * @property string $EMAIL
 * @property string|null $EMAIL_VERIFIED_AT
 * @property string $PASSWORD
 * @property string|null $REMEMBER_TOKEN
 * @property string|null $CREATED_AT
 * @property string|null $UPDATED_AT
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCREATEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEMAIL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEMAILVERIFIEDAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNAME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereREMEMBERTOKEN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUPDATEDAT($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
