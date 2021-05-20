<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\News\NewsController;
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

Route::get('/add_news', [NewsController::class, 'create'])
    ->name('news.add');
