<?php

use App\Http\Controllers\ArtikelController as ControllersArtikelController;
use App\Http\Controllers\BerandaController as ControllersBerandaController;
use App\Http\Controllers\FaqController as ControllersFaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ArtikelController;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/faq', [FaqController::class, 'faq']);
Route::get('/home/beranda', [BerandaController::class, 'beranda']);
Route::get('/home/artikel', [ArtikelController::class, 'artikel']);