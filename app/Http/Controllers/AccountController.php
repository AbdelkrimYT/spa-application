<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function supervisor(Request $request)
    {
		$request->validate([
			'password' => 'min:8',
			'password_confirmation' => 'required_with:password|same:password'
		]);
		
		auth()->guard('supervisor')->user()->update([
			'password' => Hash::make($request->password),
			'is_activated' => true
		]);
		
		return redirect(route('supervisor.dashboard'));
    }
}
