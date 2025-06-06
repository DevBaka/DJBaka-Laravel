<x-layouts.app.frontend.header :title="$title ?? null">
    
    <flux:main>
        frontend
        {{ $slot }}
    </flux:main>
</x-layouts.app.frontend.header>
