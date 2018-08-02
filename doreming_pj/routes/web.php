<?php
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
Route::get('/', function(){
    return view('pages.home');
});
Route::get('/home', 'PagesController@getIndex');
Route::get('/register', 'PagesController@getRegisterPage');
Route::get('/export-edit', 'PagesController@getLayoutEditor');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', function ()    {
        //-> admin/login
        return view('admin.login');
    });
    Route::get('/users', function ()    {
        return view('admin.users-account');
    });
    Route::get('/system', function ()    {
        return view('admin.system-account');
    });
    Route::get('/statistics', function ()    {
        return view('admin.user-statistics');
    });
    Route::get('/accounting', function ()    {
        return view('admin.accounting');
    });
});
