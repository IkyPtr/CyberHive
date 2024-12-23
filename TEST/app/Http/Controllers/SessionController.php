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

        // Check in Admin table
        $admin = Admin::where('username', $username)
            ->where('password', $request->password)
            ->first();

        if ($admin) {
            session(['admin' => $admin]);
            return redirect()->route('admin.dashboard');
        }

        // Check in Teknisi table
        $teknisi = Teknisi::where('username', $username)
            ->where('password', $request->password)
            ->first();

            if ($teknisi) {
                session(['teknisi' => $teknisi]);
                return redirect()->route('teknisi.index');
            }

        return back()->withErrors(['username' => 'Invalid Username']);
    }
}
