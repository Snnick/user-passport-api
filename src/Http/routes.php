<?php
/**
 * Created by PhpStorm.
 * User: n.sekretarev
 * Date: 19.12.2018
 * Time: 12:12
 */

Route::group(['namespace' => 'Snnick\User\Http\Controllers', 'prefix' => 'user-api'], function(){

    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
    Route::get('details', 'UserController@details')->middleware('auth:api');

});