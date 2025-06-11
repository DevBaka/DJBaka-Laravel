@extends('backend.dashboard')
@section('backend')
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Logo-Auswahl') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Wähle ein Logo für dein Overlay aus oder lade ein neues hoch.') }}
        </p>
    </header>

    {{-- Auswahl-Form --}}
    <form method="post" action="{{ route('twitch.overlay.ffxiv.logo.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($logos as $logo)
                <label class="flex items-center gap-4 p-2 border rounded-md cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-800">
                    <input
                        type="radio"
                        name="selected_logo"
                        value="{{ $logo->id }}"
                        {{ old('selected_logo', $activeLogoId) == $logo->id ? 'checked' : '' }}
                    >
                    <img src="{{ asset($logo->logo_path) }}" alt="{{ $logo->file_name }}" class="h-12 rounded border" style="height: 48px; width: auto;">
                    <span class="text-sm">{{ $logo->file_name }}</span>
                </label>
            @endforeach
        </div>

        <x-input-error class="mt-2" :messages="$errors->get('selected_logo')" />

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Speichern') }}</x-primary-button>

            @if (session('status') === 'logo-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Gespeichert.') }}</p>
            @endif
        </div>
    </form>

    {{-- Upload-Form --}}
    <form method="post" action="{{ route('twitch.overlay.ffxiv.logo.upload') }}" enctype="multipart/form-data" class="mt-6">
        @csrf
        <label for="logo_upload" class="block mb-2 font-medium text-gray-700 dark:text-gray-300">Neues Logo hochladen</label>
        <input type="file" name="logo_upload" id="logo_upload" accept="image/*" required class="block w-full text-sm text-gray-500
            file:mr-4 file:py-2 file:px-4
            file:rounded file:border-0
            file:text-sm file:font-semibold
            file:bg-blue-50 file:text-blue-700
            hover:file:bg-blue-100
            "/>

        <x-input-error class="mt-2" :messages="$errors->get('logo_upload')" />

        <button type="submit" class="btn btn-primary">
            Upload
        </button>
    </form>
</section>
@endsection()