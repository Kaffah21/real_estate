<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rumah;
use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index()
    {
        $rumahs = Rumah::all();
        return view('admin.rumah.index', compact('rumahs'));
    }

    public function create()
    {
        return view('admin.rumah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'alamat' => 'required|string',
        ]);

        Rumah::create($request->all());

        return redirect()->route('admin.rumah.index')
                         ->with('success', 'Rumah berhasil ditambahkan.');
    }

    public function edit(Rumah $rumah)
    {
        return view('admin.rumah.edit', compact('rumah'));
    }

    public function update(Request $request, Rumah $rumah)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'alamat' => 'required|string',
        ]);

        $rumah->update($request->all());

        return redirect()->route('admin.rumah.index')
                         ->with('success', 'Rumah berhasil diperbarui.');
    }

    public function destroy(Rumah $rumah)
    {
        $rumah->delete();

        return redirect()->route('admin.rumah.index')
                         ->with('success', 'Rumah berhasil dihapus.');
    }
}
