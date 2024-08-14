<?php

namespace App\Http\Controllers;
use App\Models\Rumah;

use Illuminate\Http\Request;

class RumahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumah = Rumah::all();
        return view('rumah.index', compact('rumah'));
    }

    public function create()
    {
        return view('rumah.create');
    }

    public function store(Request $request)
    {
        Rumah::create($request->all());
        return redirect()->route('rumah.index');
    }

    public function edit(Rumah $rumah)
    {
        return view('rumah.edit', compact('rumah'));
    }

    public function update(Request $request, Rumah $rumah)
    {
        $rumah->update($request->all());
        return redirect()->route('rumah.index');
    }

    public function destroy(Rumah $rumah)
    {
        $rumah->delete();
        return redirect()->route('rumah.index');
    }
}
