<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\Components\Classe\ClasseController;
use App\Http\Controllers\Components\Cours\CoursController;
use App\Http\Controllers\Components\Formations\CentreFormationController;
use App\Http\Controllers\Components\Formations\FormationExterneController;
use App\Http\Controllers\Components\Formations\FormationInterneController;
use App\Http\Controllers\Components\Modules\ModuleController;
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
    Route::get('create', [PostController::class, 'create'])->name('create');
    Route::post('/', [PostController::class, 'store'])->name('store');
    Route::get('{post:slug}/edit', [PostController::class, 'edit'])->name('edit');
    Route::get('{post:slug}', [PostController::class, 'update'])->name('update');
    Route::get('/{category:slug}/{post:slug}', [PostController::class, 'show'])->name('show');

});

Route::resource('cours', CoursController::class);
Route::resource('module', ModuleController::class);
Route::resource('classe', ClasseController::class);

Route::group(['prefix' => 'clubs' ,'as' => 'clubs.' ],function () {
    Route::get('/', [ClubController::class, 'index'])->name('clubsList');
    Route::get('/{id}', [ClubController::class, 'show'])->name('details');
    Route::post('/', [ClubController::class, 'store'])->name('ajouter');
    Route::put('/', [ClubController::class, 'update'])->name('modifier');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
