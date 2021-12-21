<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeamsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard',[PagesController::class,'index'])->middleware(['auth'])->name('index');
//routes

Route::get('/index',[PagesController::class,'index'])->middleware(['auth'])->name('index');

Route::get('/games', [PagesController::class,'games'])->name('games');

Route::get('/teams',[PagesController::class,'teams'])->name('teams');



//CRUD

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    Route::resource('teams', TeamsController::class);
});

require __DIR__.'/auth.php';
