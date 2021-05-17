<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('test', function (){
   return 'It\'s working';
});
Route::get('user/{name}', function ($userName) {
   return 'Hello user '. $userName;
});
Route::view('info', 'info');
Route::get('news_{id?}', function ($id) {
   return 'This is news № ' . $id;
});
Route::get('control/{role}/{login}', 'App\Http\Controllers\Admin\AdminController@getAdmin');
