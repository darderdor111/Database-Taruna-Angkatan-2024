<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarunaController;

Route::get('/', [TarunaController::class, 'home'])->name('home');
Route::get('/search', [TarunaController::class, 'search'])->name('search');
Route::get('/detail/{id}', [TarunaController::class, 'detail'])->name('detail');

Route::get('/login', [TarunaController::class, 'loginForm'])->name('login');
Route::post('/login', [TarunaController::class, 'login'])->name('login.post');
Route::get('/logout', [TarunaController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [TarunaController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/taruna/create', [TarunaController::class, 'adminTarunaCreate'])->name('admin.taruna.create');
Route::post('/admin/taruna', [TarunaController::class, 'adminTarunaStore'])->name('admin.taruna.store');
Route::get('/admin/taruna/{id}/edit', [TarunaController::class, 'adminTarunaEdit'])->name('admin.taruna.edit');
Route::put('/admin/taruna/{id}', [TarunaController::class, 'adminTarunaUpdate'])->name('admin.taruna.update');
Route::delete('/admin/taruna/{id}', [TarunaController::class, 'adminTarunaDestroy'])->name('admin.taruna.destroy');
