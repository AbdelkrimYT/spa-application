<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function profile()
    {
        $username = auth()->guard('admin')->user()->username;

        return view('admin.pages.profile')->with([
            'username' => $username
        ]);
    }
}
