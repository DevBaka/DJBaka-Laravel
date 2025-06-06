
{{--
there are sidebar and header as choice
<x-layouts.app.sidebar :title="$title ?? null">
--}}
<x-layouts.app.header :title="$title ?? null">
    
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.header>
{{--
</x-layouts.app.sidebar>
--}}

{{-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'DJBaka' }}</title>
    </head>
    <body>
        baka
        {{ $slot }}
    </body>
</html>
 --}}