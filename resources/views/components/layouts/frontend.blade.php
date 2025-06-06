<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head') {{-- Enthält Meta, Title, CSS, Tailwind etc --}}
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 flex flex-col">

    {{-- Header --}}
    @include('components.layouts.frontend.header')

    {{-- Haupt-Content --}}
    <main class="flex-grow container mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('components.layouts.frontend.footer')

    @stack('scripts') {{-- Für spätere Skripte / JS --}}
</body>
</html>
