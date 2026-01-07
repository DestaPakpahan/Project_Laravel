@extends('layouts.app')

@section('content')

<div class="w-full px-6">
    <h2 class="text-2xl font-extrabold text-indigo-700 mb-6">
        Data Notulen
    </h2>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-sm border-collapse">
            <thead class="bg-indigo-50 text-indigo-700">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold">Judul Rapat</th>
                    <th class="px-4 py-3 text-left font-semibold">Notulis</th>
                    <th class="px-4 py-3 text-left font-semibold">Keputusan</th>
                    <th class="px-4 py-3 text-center font-semibold w-40">Aksi</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($notulens as $n)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-3 align-top">
                        {{ $n->rapat->judul_rapat }}
                    </td>
                    <td class="px-4 py-3 align-top">
                        {{ $n->notulis }}
                    </td>
                    <td class="px-4 py-3 align-top">
                        {{ $n->keputusan }}
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex justify-center gap-2">
                            <a href="{{ route('notulen.edit', $n) }}"
                               class="px-3 py-1 rounded-md bg-yellow-100 text-yellow-700
                                      hover:bg-yellow-200 text-xs font-semibold">
                                Edit
                            </a>

                            <form action="{{ route('notulen.destroy', $n) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus notulen ini?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="px-3 py-1 rounded-md bg-red-100 text-red-700
                                           hover:bg-red-200 text-xs font-semibold">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
