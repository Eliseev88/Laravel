<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\News\NewsController;
use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\AdminNewsController;
use \App\Http\Controllers\Admin\AdminOrderController;
use \App\Http\Controllers\Admin\AdminCategoryController;
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

Route::get('/', [MainController::class, 'welcome'])
    ->name('welcome');

//Category
Route::group(['prefix' => 'category'], function () {
    Route::get('/', [NewsController::class, 'showAllCategory'])
        ->name('news.category');
    Route::get('/{name}', [NewsController::class, 'showCategoryNews'])
        ->where('name', '\w+')
        ->name('news.category_news');
    Route::get('/{name}/{id}', [NewsController::class, 'showNews'])
        ->where(['name' => '[A-z]+', 'id' => '\d+'])
        ->name('news.news');
});

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
    Route::resource('/orders', AdminOrderController::class);
});

