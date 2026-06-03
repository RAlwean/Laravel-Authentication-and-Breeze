<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    {{ __("You're logged in!") }}
    <hr class="my-4" style="border-color: #e5e7eb;">
    <p class="mt-2"><strong>Nama:</strong> {{ Auth::user()->name }}</p>
    <p class="mt-2"><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <p class="mt-2"><strong>No. HP:</strong> {{ Auth::user()->no_hp }}</p>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
