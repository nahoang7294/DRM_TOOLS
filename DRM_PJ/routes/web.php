<?php

use App\SystemRole;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => '/', function () {
    return view('client.content');
}]);

Route::get('login', 'LoginController@getLogin')->name('getLogin');
Route::post('login', 'LoginController@postLogin')->name('postLogin');
Route::get('logout', 'LoginController@getLogout')->name('getLogout');

