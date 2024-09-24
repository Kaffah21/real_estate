<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Pastikan ini ada

class AdminUserController extends Controller
{
    // Menampilkan daftar user admin
    public function index()
    {
        $admins = User::all(); // Ambil semua admin users
        return view('admin.users.index', compact('admins'));
    }

    // Menampilkan form edit untuk user admin
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.users.edit', compact('admin'));
    }

    // Memproses update data user admin
    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);

        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$admin->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update data admin
        $admin->name = $validatedData['name'];
        $admin->email = $validatedData['email'];

        // Update password jika diisi
        if ($request->filled('password')) {
            $admin->password = bcrypt($validatedData['password']);
        }

        $admin->save();

        return redirect()->route('admin.users.index')->with('success', 'Admin updated successfully.');
    }
}
