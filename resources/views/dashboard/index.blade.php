@extends('layouts.app')

@section('content')


<div class="space-y-10">

    <div class="bg-gradient-to-r from-indigo-200 via-sky-200 to-purple-200 rounded-3xl p-8 shadow-lg flex flex-col md:flex-row items-center justify-between">
        <div>
            <h1 class="text-3xl md:text-4xl font-black mb-3
           text-indigo-600 animate-float glow-text">
    Buat Notulensi Rapat Kamu Disini
</h1>

@if(session('admin') && session('user')['admin'] === 'user')
    <a href="{{ route('notulen.notulen') }}"
       class="bg-red-500 text-white px-4 py-2 rounded-lg">
       🔐 Admin Notulen
    </a>
@endif

            <p class="text-gray-700 max-w-xl">
                Kelola rapat dan dokumentasi notulen secara terstruktur, rapi, dan profesional
                dalam satu sistem terintegrasi.
            </p>
        </div>

        <img
            src="https://cdni.iconscout.com/illustration/premium/thumb/meeting-illustration-svg-download-png-2912140.png"
            alt="Meeting Illustration"
            class="w-100 mt-2 md:mt-0">
    </div>

    {{-- STATISTIK --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
            <div class="flex items-center gap-4">
                <div class="bg-indigo-100 p-3 rounded-xl text-2xl">📅</div>
                <div>
                    <p class="text-gray-500 text-sm">Total Rapat</p>
                    <p class="text-3xl font-bold text-indigo-600">{{ $totalRapat }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
            <div class="flex items-center gap-4">
                <div class="bg-emerald-100 p-3 rounded-xl text-2xl">📝</div>
                <div>
                    <p class="text-gray-500 text-sm">Total Notulen</p>
                    <p class="text-3xl font-bold text-emerald-600">{{ $totalNotulen }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
            <div class="flex items-center gap-4">
                <div class="bg-violet-100 p-3 rounded-xl text-2xl">👤</div>
                <div>
                    <p class="text-gray-500 text-sm">Total Notulis</p>
                    <p class="text-3xl font-bold text-violet-600">{{ $totalNotulis }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <div class="bg-white rounded-2xl p-6 shadow">
            <h2 class="text-lg font-semibold mb-4 flex items-center gap-2">
                Notulen Terbaru
            </h2>

            @forelse ($notulenTerbaru as $n)
                <div class="bg-indigo-50 border-l-4 border-indigo-300 rounded-lg p-4 mb-3">
                    <p class="font-semibold text-gray-800">
                        {{ $n->rapat->judul_rapat }}
                    </p>
                    <p class="text-xs text-gray-500 mb-1">
                        {{ \Carbon\Carbon::parse($n->rapat->tanggal)->format('d M Y') }}
                    </p>
                    <p class="text-sm text-gray-700">
                        {{ Str::limit($n->pembahasan, 70) }}
                    </p>
                </div>
            @empty
                <p class="text-gray-500 text-sm">Belum ada notulen.</p>
            @endforelse
        </div>

        <div class="bg-white rounded-2xl p-6 shadow">
            <h2 class="text-lg font-semibold mb-4 flex items-center gap-2">
                Rapat Akan Datang
            </h2>

            @forelse ($rapatAkanDatang as $r)
                <div class="flex justify-between items-center bg-sky-50 rounded-xl p-4 mb-3">
                    <div>
                        <p class="font-semibold text-gray-800">
                            {{ \Carbon\Carbon::parse($r->tanggal)->format('d M Y') }}
                        </p>
                        <p class="text-sm text-gray-600">
                            {{ $r->waktu }} • {{ $r->tempat }}
                        </p>
                    </div>
                    <span class="text-2xl">⏰</span>
                </div>
            @empty
                <p class="text-gray-500 text-sm">Tidak ada rapat terjadwal.</p>
            @endforelse
        </div>
    </div>

    <div class="flex flex-wrap gap-4">
        <a href="{{ route('rapat.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl shadow transition flex items-center gap-2">
            Tambah Rapat
        </a>

        <a href="{{ route('rapat.index') }}"
           class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-xl shadow transition flex items-center gap-2">
            Kelola Notulen
        </a>

                <a href="{{ route('logout') }}"
           class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl shadow transition flex items-center gap-2">
            Logout
        </a>

    </div>

</div>
@endsection
