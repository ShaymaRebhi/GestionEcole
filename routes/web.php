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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tables', function () {
    return view('layouts.tables');
})->name('tables');
Route::get('/coursList', function () {
    return view('Components.Cours.coursList');
})->name('coursList');

Route::get('/moduleList', function () {
    return view('Components.Module.moduleList');
})->name('moduleList');


Route::get('/formationsexternesList', function () {
    return view('Components.Formationsexternes.formationexternesList');
})->name('formationsexternesList');


Route::get('/formationsinternesList', function () {
    return view('Components.Formationsinternes.formationsinternesList');
})->name('formationsinternesList');

Route::get('/centreformationList', function () {
    return view('Components.Centreformation.centreformationList');
})->name('centreformationList');
