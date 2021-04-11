<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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
})->name('homepage');

Route::get('/staff',[PublicController::class,'staff'])->name('staff');

Route::get('/perche-sceglierci',[PublicController::class,'sceglierci'])->name('sceglierci');

Route::get('/dove-siamo',[PublicController::class,'dovesiamo'])->name('dovesiamo');

Route::get('/contatti',[PublicController::class,'contatti'])->name('contatti');