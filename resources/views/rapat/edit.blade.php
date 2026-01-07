@extends('layouts.app')

@section('content')

<div class="w-full px-6">
    <h2 class="text-2xl font-extrabold text-yellow-600 mb-6">
        Edit Rapat
    </h2>

    <form action="{{ route('rapat.update',$rapat) }}" method="POST"
          class="bg-white p-6 rounded-xl shadow space-y-5 w-full">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Judul Rapat
            </label>
            <input type="text" name="judul_rapat"
                   value="{{ $rapat->judul_rapat }}"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-yellow-200"
                   required>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Tanggal
                </label>
                <input type="date" name="tanggal"
                       value="{{ $rapat->tanggal }}"
                       class="w-full border rounded-lg p-3 focus:ring focus:ring-yellow-200"
                       required>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-600 mb-1">
                    Waktu
                </label>
                <input type="time" name="waktu"
                       value="{{ $rapat->waktu }}"
                       class="w-full border rounded-lg p-3 focus:ring focus:ring-yellow-200"
                       required>
            </div>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Tempat
            </label>
            <input type="text" name="tempat"
                   value="{{ $rapat->tempat }}"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-yellow-200"
                   required>
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-600 mb-1">
                Pimpinan Rapat
            </label>
            <input type="text" name="pimpinan_rapat"
                   value="{{ $rapat->pimpinan_rapat }}"
                   class="w-full border rounded-lg p-3 focus:ring focus:ring-yellow-200"
                   required>
        </div>

        <div class="flex justify-end gap-3 pt-4">
            <a href="{{ route('rapat.index') }}"
               class="px-5 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">
                Kembali
            </a>
            <button
                class="px-5 py-2 rounded-lg bg-yellow-500 text-white hover:bg-yellow-600">
                Update Rapat
            </button>
        </div>
    </form>
</div>

@endsection
