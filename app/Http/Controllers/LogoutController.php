<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function admin(Request $request)
    {
        auth()->guard('admin')->logout();
        return redirect(route('admin.login'));
    }

    public function supervisor()
    {
        auth()->guard('supervisor')->logout();
        return redirect(route('supervisor.login'));
    }
}
