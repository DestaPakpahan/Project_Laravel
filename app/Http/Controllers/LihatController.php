<?php

namespace App\Http\Controllers;

use App\Models\Notulen;
use App\Models\Rapat;
use Illuminate\Http\Request;

class LihatController extends Controller
{
    public function Lihat ()
    {
        $notulens = Notulen::with('rapat')
            ->orderBy('created_at', 'asc')
            ->get();

        return view('Lihat.index', compact('notulens'));
    }
}
