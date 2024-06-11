<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function admin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if (auth()->guard('admin')->attempt(['username' => $username, 'password' => $password]))
            return redirect(route('admin.dashboard'));

        return back()->with('error', __('Username or password incorrect.'));
    }

    public function supervisor(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (auth()->guard('supervisor')->attempt(['email' => $email, 'password' => $password]))
            return redirect(route('supervisor.dashboard'));

        return back()->with('error', __('Email or password incorrect.'));
    }
}
