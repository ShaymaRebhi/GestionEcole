<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tables', function () {
    return view('layouts.tables');
})->name('tables');

//Categories
Route::group(['prefix' => 'categories' ,'as' => 'categories.' ],function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'tags' ,'as' => 'tags.' ],function () {
    Route::get('/', [TagController::class, 'index'])->name('index');
});


