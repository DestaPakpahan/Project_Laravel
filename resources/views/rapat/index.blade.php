@extends('layouts.app')

@section('content')

<div class="w-full px-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-extrabold text-indigo-700">
            Data Rapat
        </h2>

        <a href="{{ route('rapat.create') }}"
           class="px-4 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700">
            + Tambah Rapat
        </a>
    </div>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-sm border-collapse">
            <thead class="bg-indigo-50 text-indigo-700">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold">Judul Rapat</th>
                    <th class="px-4 py-3 text-left font-semibold">Tanggal</th>
                    <th class="px-4 py-3 text-center font-semibold w-56">Aksi</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($rapats as $r)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-3">{{ $r->judul_rapat }}</td>
                    <td class="px-4 py-3">{{ $r->tanggal }}</td>

                    <td class="px-4 py-3">
    <div class="inline-flex items-center gap-2 whitespace-nowrap">

        <a href="{{ route('rapat.edit', $r) }}"
           class="px-3 py-1 rounded-md bg-yellow-100 text-yellow-700
                  hover:bg-yellow-200 text-xs font-semibold">
            Edit
        </a>

        <form action="{{ route('rapat.destroy', $r) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus rapat ini?')">
            @csrf
            @method('DELETE')
            <button
                class="px-3 py-1 rounded-md bg-red-100 text-red-700
                       hover:bg-red-200 text-xs font-semibold">
                Hapus
            </button>
        </form>

        @if (!$r->notulen)
            <a href="{{ route('notulen.create', $r) }}"
               class="px-3 py-1 rounded-md bg-green-100 text-green-700
                      hover:bg-green-200 text-xs font-semibold">
                + Notulen
            </a>
        @endif

    </div>
</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
