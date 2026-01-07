@extends('layouts.app')

@section('content')


<div class="flex justify-center items-center min-h-[70vh]">
    <form method="POST" action="/login"
          class="bg-white p-8 rounded-2xl shadow-lg w-96 space-y-5">
        @csrf

        <h2 class="text-2xl font-bold text-center text-indigo-600">
            Login Sistem Notulen
        </h2>

        @if(session('error'))
            <p class="text-red-500 text-sm text-center">
                {{ session('error') }}
            </p>
        @endif

        <input type="text" name="username"
               placeholder="Username"
               class="w-full border rounded-lg p-3">

        <input type="password" name="password"
               placeholder="Password"
               class="w-full border rounded-lg p-3">

        <button
            class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
            Login
        </button>

        <p class="text-xs text-center text-gray-500">
        </p>
    </form>
</div>
@endsection
