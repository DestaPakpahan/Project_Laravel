<?php

namespace App\Http\Controllers;

use App\Models\Rapat;
use App\Models\Notulen;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
           
            'totalRapat'   => Rapat::count(),
            'totalNotulen' => Notulen::count(),
            'totalNotulis' => Notulen::distinct('notulis')->count('notulis'),

           
            'notulenTerbaru' => Notulen::with('rapat')
                ->latest()
                ->take(3)
                ->get(),

            'rapatAkanDatang' => Rapat::whereDate('tanggal', '>=', now())
                ->orderBy('tanggal')
                ->take(3)
                ->get(),
        ]);
    }
}
