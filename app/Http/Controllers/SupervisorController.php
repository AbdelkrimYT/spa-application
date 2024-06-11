<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Project;

class SupervisorController extends Controller
{
    public function dashboard()
    {
        return view('supervisor.pages.dashboard');
    }

    public function profile()
    {
        $supervisor = auth()->guard('supervisor')->user();

        return view('supervisor.pages.profile')->with([
            'supervisor' => $supervisor
        ]);
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        auth()->guard('supervisor')->user()->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return back()->with([]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old-password' => 'required',
            'password' => 'required|min:8',
            'confirm-password' => 'required_with:password|same:password'
        ]);

        $old_password = $request['old-password'];
        $new_password = $request['password'];

        if (Hash::make($old_password) != auth()->guard('supervisor')->user()->password)
            return 'NO';

        auth()->guard('supervisor')->user()->update([
            'password' => Hash::make($new_password)
        ]);

        return back()->with([
        ]);
    }
}
