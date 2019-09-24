<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user/{email}', function ($email) {
    DB::table('users')->where('email',$email)->update(['email_verified_at' => date('Y-m-d H:i:s',time())]);  
})->where('email', '[A-Za-z0-9.@]+');
