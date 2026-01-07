<?php

namespace App\Http\Controllers;

use App\Models\Rapat;
use Illuminate\Http\Request;

class RapatController extends Controller
{
    public function index()
    {
        $rapats = Rapat::with('notulen')->get();
        return view('rapat.index', compact('rapats'));
    }

    public function create()
    {
        return view('rapat.create');
    }

    public function store(Request $request)
    {
        Rapat::create($request->all());
        return redirect()->route('rapat.index');
    }

    public function edit(Rapat $rapat)
    {
        return view('rapat.edit', compact('rapat'));
    }

    public function update(Request $request, Rapat $rapat)
    {
        $rapat->update($request->all());
        return redirect()->route('rapat.index');
    }

    public function destroy(Rapat $rapat)
    {
        $rapat->delete();
        return redirect()->route('rapat.index');
    }
}
