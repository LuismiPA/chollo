<?php

use App\Http\Controllers\PagesController;
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

/* Route::get('/', [PagesController::class,'index'])->name('index'); */
Route::get('nuevos', [PagesController::class,'nuevos'])->name('nuevos');
Route::get('destacados', [PagesController::class,'destacados'])->name('destacados');

Route::get('/',[PagesController::class,'index'])->name('index');
    Route::get('formChollo', [PagesController::class,'formChollo'])->name("formChollo");
    Route::post('crearChollo', [PagesController::class,'crearChollo']) ->name("crearChollo");
    Route::get('chollo/{id}', [PagesController::class,'detalles'])->name("detalles");

/* Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('nuevos', function(){
    return view('nuevos');
})->name("nuevos");

Route::get('destacados', function(){
    return view('destacados');
})->name("destacados"); */
