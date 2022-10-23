<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Components\Modules\ModuleController;


use App\Http\Controllers\Components\Classe\ClasseController;
use App\Http\Controllers\Components\Cours\CoursController;
use App\Http\Controllers\Components\Formations\CentreFormationController;
use App\Http\Controllers\Components\Formations\FormationExterneController;
use App\Http\Controllers\Components\Formations\FormationInterneController;


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
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('{post:slug}/edit', [PostController::class, 'edit'])->name('edit');
    Route::get('{post:slug}', [PostController::class, 'update'])->name('update');
    Route::get('/{category:slug}/{post:slug}', [PostController::class, 'show'])->name('show');

});

Route::group(['prefix' => 'clubs' ,'as' => 'clubs.' ],function () {
    Route::get('/', [ClubController::class, 'index'])->name('clubsList');
    Route::get('/{id}', [ClubController::class, 'show'])->name('details');
    Route::post('/add', [ClubController::class, 'store'])->name('ajouter');
    Route::get('/edit/{id}', [ClubController::class, 'edit'])->name('modifier');
    Route::post('/update/{id}', [ClubController::class, 'update'])->name('update');
    Route::post('/', [ClubController::class, 'invite'])->name('inviter');
    Route::delete('/{id}', [ClubController::class, 'destroy'])->name('delete');
});

Route::group(['prefix' => 'events' ,'as' => 'events.' ],function () {
    Route::get('/', [EventController::class, 'index'])->name('eventsList');
    Route::get('/{id}', [EventController::class, 'show'])->name('details');
    Route::post('/add', [EventController::class, 'store'])->name('ajouter');
    Route::post('/inv', [EventController::class, 'invite'])->name('inviter');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('modifier');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('update');
    Route::delete('/{id}', [EventController::class, 'destroy'])->name('delete');

});
Route::resource('cours', CoursController::class);
Route::resource('module', ModuleController::class);
Route::resource('classe', ClasseController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
