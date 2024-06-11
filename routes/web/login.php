<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::view('admin/login', 'admin.pages.login')->name('admin.login');
Route::view('supervisor/login', 'supervisor.pages.login')->name('supervisor.login');

Route::post('admin/login', [LoginController::class, 'admin'])->name('admin.login');
Route::post('supervisor/login', [LoginController::class, 'supervisor'])->name('supervisor.login');
