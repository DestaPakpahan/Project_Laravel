<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notulen;
use App\Models\Rapat;

class NotulenSeeder extends Seeder
{
    public function run(): void
    {
        $rapat = Rapat::first();

        Notulen::create([
            'rapat_id'   => $rapat->id,
            'pembahasan' => 'Pembahasan kegiatan UKM',
            'keputusan'  => 'Disepakati jadwal kegiatan',
            'notulis'    => 'Sekretaris'
        ]);

        Notulen::create([
            'rapat_id'   => $rapat->id,
            'pembahasan' => 'Evaluasi program',
            'keputusan'  => 'Perbaikan sistem',
            'notulis'    => 'Admin'
        ]);

        Notulen::create([
            'rapat_id'   => $rapat->id,
            'pembahasan' => 'Rencana lanjutan',
            'keputusan'  => 'Dibahas bulan depan',
            'notulis'    => 'Ketua'
        ]);
    }
}
