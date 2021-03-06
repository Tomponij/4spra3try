<?php

use App\Http\Controllers\FieldController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UsersController;
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
    return redirect()->route('index');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/dashboard',[PagesController::class,'index'])->middleware(['auth'])->name('index');
//routes

Route::get('/index',[PagesController::class,'index'])->middleware(['auth'])->name('index');

Route::get('/genereer', [GamesController::class, 'genereer']) ->middleware(['auth'])->name('genereer');
Route::get('/grasmaaien', [GamesController::class, 'grasmaaien']) ->middleware(['auth'])->name('allgames');

Route::get('/scheidsrechterInfo', [GamesController::class, 'scheidsrechterInfo']) ->middleware(['auth'])->name('scheidsrechterInfo');

//CRUD

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::resource('teams', TeamsController::class);
    Route::resource('games',GamesController::class);
    Route::resource('accounts',UsersController::class);
    Route::resource('fields',FieldController::class);
});

require __DIR__.'/auth.php';



