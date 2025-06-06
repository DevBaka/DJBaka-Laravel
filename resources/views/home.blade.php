<x-layouts.frontend>




    {{-- VORSTELLUNGSTEXT MIT BILD --}}
    <section class="bg-zinc-950 text-zinc-100 py-16 px-6 md:px-0">
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8 items-center">
            <img src="{{ asset('images/DJBaka_Dark.jpg') }}" alt="DJBaka" class="rounded-lg shadow-xl">
            <div>
                <h2 class="text-3xl font-bold mb-4">Wer ist DJBaka?</h2>
                <p class="text-zinc-300 leading-relaxed">
                    Ich bin DJBaka – Genrebrecher, Crowd-Melter und Resident der dunklen Klangwelten.
                    Ob düsterer Industrial Techno oder euphorisierender Hard Dance – mein Set bringt jedes System ins Wanken.
                </p>
            </div>
        </div>
    </section>

    {{-- LINKS / NAVIGATOR --}}
    <section class="bg-zinc-900 text-zinc-100 py-6 border-t border-zinc-800">
        <div class="max-w-5xl mx-auto px-4 flex justify-around text-sm md:text-base">
            <a href="{{ route('home') }}" class="hover:text-fuchsia-500 transition">Events</a>
            <a href="{{ route('home') }}" class="hover:text-fuchsia-500 transition">Booking</a>
            <a href="{{ route('home') }}" class="hover:text-fuchsia-500 transition">YouTube</a>
            <a href="{{ route('home') }}" class="hover:text-fuchsia-500 transition">Releases</a>
        </div>
    </section>

    {{-- FEATURED YOUTUBE SET --}}
    <section class="bg-black text-white py-16 text-center">
        <h2 class="text-3xl font-bold mb-6">🔥 Aktuelles Set</h2>
        <div class="max-w-3xl mx-auto aspect-video shadow-lg rounded-lg overflow-hidden">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/deinVideo" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    {{-- RELEASES (2 NEUE) --}}
    <section class="bg-zinc-900 text-white py-16">
        <h2 class="text-3xl text-center font-bold mb-10">🆕 Neue Releases</h2>
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 px-4">
            <div class="bg-zinc-800 p-4 rounded shadow-lg">
                <img src="{{ asset('images/release1.jpg') }}" alt="Release 1" class="mb-4 rounded">
                <h3 class="text-xl font-bold">Trackname 1</h3>
                <p class="text-zinc-300">Kurzbeschreibung oder Label</p>
            </div>
            <div class="bg-zinc-800 p-4 rounded shadow-lg">
                <img src="{{ asset('images/release2.jpg') }}" alt="Release 2" class="mb-4 rounded">
                <h3 class="text-xl font-bold">Trackname 2</h3>
                <p class="text-zinc-300">Kurzbeschreibung oder Label</p>
            </div>
        </div>
    </section>
</x-layouts.frontend>
