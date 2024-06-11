<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;


Route::get('admin/logout', [LogoutController::class, 'admin'])->name('admin.logout');
Route::get('supervisor/logout', [LogoutController::class, 'supervisor'])->name('supervisor.logout');
