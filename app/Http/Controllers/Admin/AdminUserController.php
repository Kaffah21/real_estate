<?php
namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
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
        $admin = Admin::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:8|confirmed',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validate image file
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;

        // Handle password update
        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            // Delete old image if exists
            if ($admin->profile_image) {
                Storage::delete('public/' . $admin->profile_image);
            }

            // Store the new image
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $admin->profile_image = $path;
        }

        $admin->save();

        return redirect()->route('admin.users.index')->with('success', 'Admin updated successfully!');
    }

    public function up()
{
    Schema::table('admins', function (Blueprint $table) {
        $table->string('profile_image')->nullable()->after('password');
    });
}

}
