<?php

use App\Http\Controllers\SuperController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SuperController::class, 'welcome'])->name('super.welcome');

Route::get('/mapa', [SuperController::class, 'mapa'])->name('super.mapa');

Route::get('/lista', [SuperController::class, 'lista'])->name('super.lista');