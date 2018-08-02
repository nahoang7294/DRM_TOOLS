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

Route::get('/', function () {
    return view('client.content');
});


// Route::get('/', function(){
//     $roles = SystemRole::all();
//     foreach ($roles as $value) {
//         echo($value->description.'<br>');
//     }
//     die;
// });
