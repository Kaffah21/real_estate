<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertiRumah; // Ensure you have this model
use Illuminate\Http\Request;

class PropertiRumahController extends Controller
{
    public function index()
    {
        $propertiRumahs = PropertiRumah::all();
        return view('admin.properti_rumah.index', compact('propertiRumahs'));
    }

    public function create()
    {
        return view('admin.properti_rumah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add other validation rules
        ]);

        PropertiRumah::create($request->all());
        return redirect()->route('admin.properti_rumah.index');
    }

    public function show(PropertiRumah $propertiRumah)
    {
        return view('admin.properti_rumah.show', compact('propertiRumah'));
    }

    public function edit(PropertiRumah $propertiRumah)
    {
        return view('admin.properti_rumah.edit', compact('propertiRumah'));
    }

    public function update(Request $request, PropertiRumah $propertiRumah)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add other validation rules
        ]);

        $propertiRumah->update($request->all());
        return redirect()->route('admin.properti_rumah.index');
    }

    public function destroy(PropertiRumah $propertiRumah)
    {
        $propertiRumah->delete();
        return redirect()->route('admin.properti_rumah.index');
    }
}
