<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reporte de cupones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('reports.search', 'state-coupons') }}" method="post" class="p-4">
                    @csrf
                    <div class="mb-4">
                        <x-jet-label value="Fecha inicio" />
                        <x-jet-input type="datetime-local" name="start_date" value="{{\Carbon\Carbon::today() }}" />
                        {{-- Mensaje de error con jetstream --}}
                        @error('start_date')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label value="Fecha fin" />
                        <x-jet-input type="datetime-local" name="end_date" value="{{ \Carbon\Carbon::today()->addHours(23)->addMinute(59) }}" />
                        @error('end_date')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label value="Estado" />
                        <select name="state" class="rounded-md border-gray-300">
                            <option value="all" selected>Todos</option>
                            <option value="campeche">Campeche</option>
                            <option value="chiapas">Chiapas</option>
                            <option value="tabasco">Tabasco</option>
                            <option value="yucatan">Yucatán</option>
                        </select>
                    </div>

                    <div>
                        <x-jet-button>
                            {{ __('Obtener reporte') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>