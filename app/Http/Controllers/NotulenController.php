<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notulen;
use App\Models\Rapat;

class NotulenController extends Controller
{
    public function create(Rapat $rapat)
    {
        return view('notulen.create', compact('rapat'));
    }

    public function store(Request $request, Rapat $rapat)
{
    $rapat->notulen()->create($request->only([
        'pembahasan',
        'keputusan',
        'catatan',
        'notulis'
    ]));

    return redirect()->route('rapat.index');
}
    public function edit(Notulen $notulen)
    {
        return view('notulen.edit', compact('notulen'));
    }

    public function update(Request $request, Notulen $notulen)
    {
        $notulen->update($request->only([
            'pembahasan',
            'keputusan',
            'notulis',
        ]));

        return redirect()->route('rapat.index');
    }

    public function destroy(Notulen $notulen)
    {
        $notulen->delete();
        return redirect()->route('rapat.index');
    }
public function notulen()
{
    $notulens = Notulen::with('rapat')->get();
    return view('notulen.notulen', compact('notulens'));
 
}

}
