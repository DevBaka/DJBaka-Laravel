
{{--
there are sidebar and header as choice
<x-layouts.app.sidebar :title="$title ?? null">
--}}
<x-layouts.app.backend.header :title="$title ?? null">
    
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.backend.header>
{{--
</x-layouts.app.sidebar>
--}}

