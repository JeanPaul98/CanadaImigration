<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatController;

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

Route::get('/', function () {return view('index');})->name('Acceuil');
Route::post('/', [CandidatController::class, 'store']);
// Route::get('/', function () {return view('dashboard.layouts.index');})->name('Dashboard');
// Route::get('/', function () {return view('dashboard.layouts.form_buttons');})->name('Dashboard');
