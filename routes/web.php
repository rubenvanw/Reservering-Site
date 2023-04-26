<?php

use App\Http\Controllers\ReserveringController;
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
//     return view('auth/login');
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reserveringen/create', [ReserveringController::class, 'create'])->name('create')->middleware('auth');
Route::post('/reserveringen/store', [ReserveringController::class, 'store'])->middleware('auth');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/reserveringen/index', [ReserveringController::class, 'index'])->name('index');
});


