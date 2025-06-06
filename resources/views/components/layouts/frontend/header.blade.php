<header x-data="{ open: false }" class="bg-white dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <div class="container mx-auto flex items-center justify-between px-4 py-4">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <img src="{{ asset('images/DJBaka_logo.png') }}" alt="DJBaka Logo" class="h-20 md:h-24 w-auto" />
        </a>

        {{-- Hamburger Button --}}
        <button @click="open = !open" class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        {{-- Navigation --}}
        <nav :class="{'block': open, 'hidden': !open}" class="md:flex space-x-6 text-gray-700 dark:text-gray-300 hidden">
            <a href="{{ route('home') }}" class="hover:text-blue-600">Mixes</a>
            <a href="{{ route('home') }}" class="hover:text-blue-600">Über mich</a>
            <a href="{{ route('home') }}" class="hover:text-blue-600">Kontakt</a>
        </nav>
    </div>
</header>
