@extends('layouts.app')

@section('content')

<div class="mb-8">
    <h2 class="text-3xl font-extrabold text-indigo-700 flex items-center gap-2">
        Daftar Notulen Rapat
    </h2>
    <p class="text-gray-500 mt-1">
        Ringkasan hasil rapat yang terdokumentasi secara sistematis
    </p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

@forelse ($notulens as $n)
    <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl
                transition-all duration-300 overflow-hidden
                border border-gray-100">

        <div class="p-4 bg-gradient-to-r from-indigo-500 to-purple-500 text-white">
            <h3 class="text-lg font-bold leading-tight">
                {{ $n->rapat->judul_rapat }}
            </h3>
            <p class="text-sm opacity-90 flex items-center gap-1 mt-1">
                {{ \Carbon\Carbon::parse($n->rapat->tanggal)->format('d M Y') }}
            </p>
        </div>

        <div class="p-5 flex flex-col h-full">

        <div class="mb-4">
    <p class="text-sm font-semibold text-indigo-600 mb-1">
        Pembahasan
    </p>
    <p class="text-gray-700 text-sm leading-relaxed whitespace-pre-line">
        {{ $n->pembahasan }}
    </p>
</div>

<div class="mb-4">
    <p class="text-sm font-semibold text-purple-600 mb-1">
        Keputusan
    </p>
    <p class="text-gray-700 text-sm leading-relaxed whitespace-pre-line">
        {{ $n->keputusan }}
    </p>
</div>

<div class="mb-4">
    <p class="text-sm font-semibold text-purple-600 mb-1">
        Notulis
    </p>
    <p class="text-gray-700 text-sm leading-relaxed whitespace-pre-line">
        {{ $n->notulis }}
    </p>
</div>

        </div>

        <div class="h-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500
                    transform scale-x-0 group-hover:scale-x-100
                    transition-transform duration-500 origin-left">
        </div>

    </div>
@empty
    <div class="col-span-full bg-yellow-50 border border-yellow-200
                p-6 rounded-xl text-yellow-800 text-center">
        📭 Belum ada notulen tersedia.
    </div>
@endforelse

</div>

@endsection
