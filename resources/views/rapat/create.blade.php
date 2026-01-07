@extends('layouts.app')

@section('content')

<div class="w-full px-6">
    <h2 class="text-2xl font-extrabold text-indigo-700 mb-6">
        Tambah Rapat
    </h2>

    <form action="{{ route('rapat.store') }}" method="POST"
          class="bg-white p-6 rounded-xl shadow space-y-5 w-full">
        @csrf

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Judul Rapat
            </label>
            <input type="text" name="judul_rapat"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                   placeholder="Masukkan judul rapat" required>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Tanggal
                </label>
                <input type="date" name="tanggal"
                       class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                       required>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Waktu
                </label>
                <input type="time" name="waktu"
                       class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                       required>
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Tempat
            </label>
            <input type="text" name="tempat"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                   placeholder="Tempat rapat" required>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Pimpinan Rapat
            </label>
            <input type="text" name="pimpinan_rapat"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-indigo-200"
                   placeholder="Nama pimpinan rapat" required>
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('rapat.index') }}"
               class="px-5 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">
                Kembali
            </a>
            <button
                class="px-5 py-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700">
                Simpan Rapat
            </button>
        </div>
    </form>
</div>

@endsection
