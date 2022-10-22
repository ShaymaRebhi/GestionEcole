<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\PostController;
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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tables', function () {
    return view('layouts.tables');
})->name('tables');
Route::get('/coursList', function () {
    return view('Components.Cours.coursList');
})->name('coursList');

Route::get('/clubsList', function () {
    return view('Components.Club.clubsList');
})->name('clubsList');

Route::get('/eventsList', function () {
    return view('Components.Event.eventsList');
})->name('eventsList');

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
Route::resource('FormationExterne', FormationExterneController::class);
Route::resource('FormationInterne', FormationInterneController::class);
Route::resource('CentreFormation', CentreFormationController::class);

Route::group(['prefix' => 'categories' ,'as' => 'categories.' ],function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'tags' ,'as' => 'tags.' ],function () {
    Route::get('/', [TagController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'posts' ,'as' => 'posts.' ],function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
});

Route::resource('cours', CoursController::class);
Route::resource('module', ModuleController::class);
Route::resource('classe', ClasseController::class);







