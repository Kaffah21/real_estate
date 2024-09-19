<?php

namespace App\Http\Controllers;

use App\Models\PropertiRumah;
use Illuminate\Http\Request;

class PropertiRumahController extends Controller
{
    // Menampilkan daftar properti rumah
    public function index()
    {
        $rumah = PropertiRumah::all();
        return view('admin.properti_rumah.index', compact('rumah'));
    }

    // Menampilkan form untuk membuat properti rumah baru
    public function create()
    {
        return view('admin.properti_rumah.create');
    }

    // Menyimpan properti rumah yang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        PropertiRumah::create($request->all());
        return redirect()->route('admin.properti_rumah.index')->with('success', 'Properti Rumah berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit properti rumah
    public function edit(PropertiRumah $propertiRumah)
    {
        return view('admin.properti_rumah.edit', compact('propertiRumah'));
    }

    // Mengupdate data properti rumah
    public function update(Request $request, PropertiRumah $propertiRumah)
    {
        $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $propertiRumah->update($request->all());
        return redirect()->route('admin.properti_rumah.index')->with('success', 'Properti Rumah berhasil diperbarui');
    }

    // Menghapus properti rumah
    public function destroy(PropertiRumah $propertiRumah)
    {
        $propertiRumah->delete();
        return redirect()->route('admin.properti_rumah.index')->with('success', 'Properti Rumah berhasil dihapus');
    }
}
