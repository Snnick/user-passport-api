<?php
/**
 * Created by PhpStorm.
 * User: n.sekretarev
 * Date: 19.12.2018
 * Time: 12:04
 */

namespace Snnick\User;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\User as ParentUser;

class User extends ParentUser
{
    use HasApiTokens, Notifiable;
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
}