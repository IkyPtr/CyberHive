<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Teknisi;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->username;

        if (str_starts_with($username, 'A')) {
            $admin = Admin::where('username', $username)
                ->where('password', $request->password)
                ->first();
            if ($admin) {
                session(['admin' => $admin]);
                return redirect()->route('admin.dashboard');
            }
        }

        if (str_starts_with($username, 'T')) {
            $teknisi = Teknisi::where('username', $username)
                ->where('password', $request->password)
                ->first();
            if ($teknisi) {
                return redirect()->route('teknisi.dashboard');
            }
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
