<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visitas al sitio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                @foreach ($views as $view)
                    <div class="p-4">
                        {{ $view->url }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
