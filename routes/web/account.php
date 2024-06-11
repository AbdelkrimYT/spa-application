<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;


Route::view('account/supervisor/activation', 'supervisor.pages.activation')->middleware('supervisor-is-activated');
Route::post('account/supervisor/activation', [AccountController::class, 'supervisor'])
	->middleware('supervisor-is-activated')
	->name('account.supervisor.activation');
