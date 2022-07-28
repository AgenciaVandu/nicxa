<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('reports.filters','total-coupons') }}">
                    <div class="p-6 hover:bg-red-600 hover:text-white">
                        <p class="font-bold text-xl">Reporte de cupones descargados</p>
                        <span class="text-gray-300 text-sm">Total de cupones descargados por rango de fechas y por franquicia</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    {!! $chart2->container() !!}
                </div>
            </div>
        </div>
    </div> --}}
    {{-- @push('scripts')
        <script src="{{ $chart->cdn() }}"></script>
        <script src="{{ $chart2->cdn() }}"></script>
        {{ $chart->script() }}
        {{ $chart2->script() }}
    @endpush --}}
</x-app-layout>
