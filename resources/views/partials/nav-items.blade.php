{{-- resources/views/partials/nav-items.blade.php --}}

<flux:navbar.item icon="layout-grid" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
    {{ __('Dashboard') }}
</flux:navbar.item>

<flux:navbar.item icon="calendar" :href="route('events')" :current="request()->routeIs('events')" wire:navigate>
    {{ __('Events') }}
</flux:navbar.item>
