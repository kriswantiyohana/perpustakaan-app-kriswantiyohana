<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeminjamanController;



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
})->middleware('auth');

// Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::get('register', [AuthController::class, 'register']);

Route::get('/read', [PeminjamanController::class, 'read'])->name('read');
Route::get('/create', [PeminjamanController::class, 'create']);
Route::post('/store', [PeminjamanController::class, 'store']);
Route::get('/edit/{id}', [PeminjamanController::class, 'edit']);
Route::put('/update/{id}', [PeminjamanController::class, 'update']);
Route::get('/destroy/{id}', [PeminjamanController::class, 'destroy']);



Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Rute-rute yang memerlukan autentikasi
    Route::get('/create', [AuthController::class, 'showCreateForm'])->name('create');
});