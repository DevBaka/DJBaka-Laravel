
{{--
there are sidebar and header as choice
<x-layouts.app.sidebar :title="$title ?? null">
--}}
<x-layouts.backend.header :title="$title ?? null">
    
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.backend.header>
{{--
</x-layouts.app.sidebar>
--}}

