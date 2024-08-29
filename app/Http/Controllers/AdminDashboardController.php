<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Pastikan $properties didefinisikan dengan benar
        // $properties = Property::all(); // atau sesuai dengan logika Anda

        // Pastikan Anda menggunakan variabel ini di view
        return view('admin.dashboard', compact('properties'));
    }
}
