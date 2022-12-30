<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apprendoController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\contentController;

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

Route::get('/', [apprendoController::class, 'index'])->middleware(['auth']);
route::get('/sobre', [apprendoController::class, 'about'])->middleware(['auth']);

Route::resource('/subject', subjectController::class)->middleware(['auth']);
Route::resource('/content', contentController::class)->middleware(['auth']);
Route::put('/content/favorite/{id}', 'App\Http\Controllers\contentController@favorite');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
