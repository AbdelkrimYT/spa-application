<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource\ProjectResourceController;
use App\Http\Controllers\SupervisorController;


Route::get('supervisor', [SupervisorController::class, 'dashboard'])->name('supervisor.dashboard')->middleware('supervisor');
Route::get('supervisor/profile', [SupervisorController::class, 'profile'])->name('supervisor.profile')->middleware('supervisor');

Route::post('supervisor/profile/update', [SupervisorController::class, 'updateName'])->name('supervisor.update.name')->middleware('supervisor');
Route::post('supervisor/profile/update/password', [SupervisorController::class, 'updatePassword'])->name('supervisor.update.password')->middleware('supervisor');

Route::get('account/activation', [SupervisorController::class, 'activation'])->name('supervisor.activation.index');

Route::resource('supervisor/project', ProjectResourceController::class)->middleware('supervisor');
