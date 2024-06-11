<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource\SpecializationResourceController;
use App\Http\Controllers\Resource\SupervisorResourceController;
use App\Http\Controllers\AdminController;

Route::get('admin', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
Route::get('admin/profile', [AdminController::class, 'profile'])->name('admin.profile')->middleware('admin');

Route::resource('admin/specialization', SpecializationResourceController::class)->middleware('admin');
Route::resource('admin/supervisor', SupervisorResourceController::class)->middleware('admin');
