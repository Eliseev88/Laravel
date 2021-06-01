<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\News\NewsController;
use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\AdminNewsController;
use \App\Http\Controllers\Admin\AdminOrderController;
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
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin.index');
    Route::match(['post', 'get'], '/create_news', [AdminNewsController::class, 'create'])
        ->name('admin.create_news');
    Route::match(['post', 'get'], '/create_order', [AdminOrderController::class, 'create'])
        ->name('admin.create_order');
    Route::post('/store_news', [AdminNewsController::class, 'store'])
        ->name('admin.news_store');
    Route::post('/store_order', [AdminOrderController::class, 'store'])
        ->name('admin.order_store');

});

