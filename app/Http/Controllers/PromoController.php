<?php

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        return view('promos.index', compact('promos'));
    }

    public function create()
    {
        return view('promos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:1',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('promos', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        Promo::create($validated);

        return redirect()->route('promos.index')->with('success', 'Promosi berhasil ditambahkan.');
    }

    public function edit(Promo $promo)
    {
        return view('promos.edit', compact('promo'));
    }

    public function update(Request $request, Promo $promo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('promos', 'public');
            $validated['image'] = '/storage/' . $imagePath;
        }

        $promo->update($validated);

        return redirect()->route('promos.index')->with('success', 'Promosi berhasil diupdate.');
    }

    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('promos.index')->with('success', 'Promosi berhasil dihapus.');
    }
}
