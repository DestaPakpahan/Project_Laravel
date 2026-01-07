<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 flex items-center h-16">

        <div class="flex items-center space-x-2 group cursor-pointer">
            <div class="w-9 h-9 flex items-center justify-center rounded-xl
                        bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white
                        animate-bounceSlow shadow-lg">
                📋
            </div>

            <h1 class="text-xl font-extrabold tracking-wide text-indigo-600
                       transition-all duration-500
                       group-hover:tracking-widest
                       animate-slideIn glow-text">
                Notulen<span class="text-gray-800">Rapat</span>
            </h1>
        </div>

        <nav class="ml-auto flex gap-6 text-sm font-semibold">
            <a href="/dashboard"
               class="px-3 py-2 rounded-lg transition
               {{ request()->is('dashboard')
                   ? 'bg-indigo-600 text-white shadow'
                   : 'text-gray-600 hover:text-indigo-600 hover:bg-indigo-50' }}">
                Dashboard
            </a>

            <a href="/rapat"
               class="px-3 py-2 rounded-lg transition
               {{ request()->is('rapat*')
                   ? 'bg-indigo-600 text-white shadow'
                   : 'text-gray-600 hover:text-indigo-600 hover:bg-indigo-50' }}">
                Rapat
            </a>

            <a href="{{ route('notulen.notulen') }}"
               class="px-3 py-2 rounded-lg transition
               {{ request()->routeIs('notulen.*')
                   ? 'bg-indigo-600 text-white shadow'
                   : 'text-gray-600 hover:text-indigo-600 hover:bg-indigo-50' }}">
                Notulen
            </a>

            <a href="{{ route('Lihat.index') }}"
               class="px-3 py-2 rounded-lg transition
               {{ request()->routeIs('Lihat.index')
                   ? 'bg-indigo-600 text-white shadow'
                   : 'text-gray-600 hover:text-indigo-600 hover:bg-indigo-50' }}">
                Lihat Notulen
            </a>
        </nav>

    </div>
</header>
