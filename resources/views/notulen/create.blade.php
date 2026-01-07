@extends('layouts.app')

@section('content')

<div class="w-full px-6">
    <h2 class="text-2xl font-extrabold text-indigo-700 mb-6">
        Notulen Rapat: {{ $rapat->judul_rapat }}
    </h2>

    <form action="{{ route('notulen.store', $rapat->id) }}" method="POST"
          class="bg-white p-6 rounded-xl shadow space-y-5 w-full">
        @csrf

        <input type="hidden" name="rapat_id" value="{{ $rapat->id }}">

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Pembahasan
            </label>
            <textarea name="pembahasan"
                      rows="4"
                      class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                      placeholder="Masukkan pembahasan rapat" required></textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Keputusan
            </label>
            <textarea name="keputusan"
                      rows="3"
                      class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                      placeholder="Masukkan keputusan rapat" required></textarea>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Nama Notulis
            </label>
            <input type="text" name="notulis"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                   placeholder="Nama notulis" required>
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('rapat.index') }}"
               class="px-5 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">
                Kembali
            </a>
            <button
                class="px-5 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
                Simpan Notulen
            </button>
        </div>
    </form>
</div>

@endsection
