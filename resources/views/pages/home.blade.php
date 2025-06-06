<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Meine Seite' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-zinc-900 dark:bg-zinc-900 dark:text-white">

    {{-- Header --}}
    <header class="w-full bg-zinc-100 dark:bg-zinc-800 border-b border-zinc-300 dark:border-zinc-700">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold">🌀 MeinLogo</a>
            <nav class="space-x-6 text-sm">
                <a href="/">Home</a>
                <a href="/blog">Blog</a>
                <a href="/about">Über mich</a>
                <a href="/login">Login</a>
            </nav>
        </div>
    </header>

    {{-- Content --}}
    <main class="max-w-4xl mx-auto px-4 py-12">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="text-sm text-center text-zinc-500 py-6 border-t mt-12">
        &copy; {{ now()->year }} DJBaka & MrsHetzer. All rights reserved.
    </footer>

</body>
</html>
