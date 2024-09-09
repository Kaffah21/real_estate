<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $admin = Admin::where('email', $credentials['email'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Auth::guard('admin')->login($admin);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function showProperties()
    {
        return view('admin.properti');
    }

    public function index()
    {
        // // Ambil data statistik
        // $totalUsers = User::count();
        // $totalProperties = Property::count();
        // $joinRequests = JoinRequest::count();

        // Kirim data ke view
        return view('admin.dashboard', compact('totalUsers', 'totalProperties', 'joinRequests'));
    }
}
