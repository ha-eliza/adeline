<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome', ['name' => 'Дом на Воскресенской набережной']);
});

Route::get('/apartment', [ApartmentController::class, 'index'])->name('pages.apartaments');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/account', function () {
    return view('pages.account.main', ['name' => 'LK']);
})->name('account')->middleware('auth');

use App\Http\Controllers\AccountController;

Route::middleware(['auth'])->prefix('account')->name('account.')->group(function () {
    Route::get('/main', [AccountController::class, 'index'])->name('main');
    Route::get('/board', [AccountController::class, 'board'])->name('board');
    Route::get('/chart', [AccountController::class, 'chart'])->name('chart');
    Route::get('/tasks', [AccountController::class, 'clipboard'])->name('clipboard');
    Route::get('/payments', [AccountController::class, 'credit'])->name('credit');
    Route::get('/news', [AccountController::class, 'news'])->name('news');
});
