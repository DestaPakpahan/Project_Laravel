<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rapat;

class RapatSeeder extends Seeder
{
    public function run(): void
    {
        Rapat::create([
            'judul_rapat'     => 'Rapat UKM',
            'tanggal'         => '2026-01-01',
            'waktu'           => '09:00',
            'tempat'          => 'Ruang A',
            'pimpinan_rapat'  => 'Ketua UKM',
        ]);
    }
}