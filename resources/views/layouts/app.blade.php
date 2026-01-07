<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>NotulensiRapat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
    body { font-family: 'Poppins', sans-serif; }
    @keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
    100% { transform: translateY(0px); }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

.glow-text {
    text-shadow:
        0 0 5px rgba(99,102,241,0.4),
        0 0 15px rgba(99,102,241,0.6);
}

@keyframes bounceSlow {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-4px); }
}

.animate-bounceSlow {
    animation: bounceSlow 2.5s ease-in-out infinite;
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-slideIn {
    animation: slideIn 0.8s ease-out forwards;
}

.glow-text {
    text-shadow: 0 0 8px rgba(99,102,241,0.5);
}


    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- HEADER --}}
    @include('includes.header')

    {{-- KONTEN UTAMA --}}
    <main class="flex-1">
        <div class="container mx-auto px-4 py-6">
            @yield('content')
        </div>
    </main>

    {{-- FOOTER --}}
    @include('includes.footer')


</body>
</html>
