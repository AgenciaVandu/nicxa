<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                <div class="flex justify-center mt-4">
                    <p class="text-xl font-xl font-semibold">Cupones descargados por franquicia</p>
                </div>
                <div class="grid grid-cols-4 items-center justify-items-center gap-4 p-6">
                    <img src="{{ asset('img/logos/burger-logo.svg') }}">
                    <img src="{{ asset('img/logos/KFC.svg') }}">
                    <img src="{{ asset('img/logos/PHUT.svg') }}">
                    <img src="{{ asset('img/logos/Frame.svg') }}">
                </div>
                <div class="grid grid-cols-4 items-center justify-items-center gap-4 p-6">
                    <div>{{ $coupon_bk }} cupones</div>
                    <div>{{ $coupon_kfc }} cupones</div>
                    <div>{{ $coupon_ph }} cupones</div>
                    <div>{{ $coupon_lbb }} cupones</div>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                <p class="text-center">
                    Cupón mas descargado:
                    <span class="ml-2 mr-2">{{ $coupon_mas_repetido_name->coupon }}</span>
                    <span>{{ $coupon_mas_repetido_name->franchise }}</span>
                </p>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('reports.filters', 'total-coupons') }}">
                    <div class="p-6 hover:bg-red-500 hover:text-white">
                        <p class="font-bold text-xl">Reporte de cupones descargados</p>
                        <span class="text-gray-300 text-sm">Total de cupones descargados por rango de fechas y por
                            franquicia</span>
                    </div>
                </a>
            </div>
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4">
                <a href="{{ route('reports.filters', 'client-coupons') }}">
                    <div class="p-6 hover:bg-red-500 hover:text-white">
                        <p class="font-bold text-xl">Reporte de cupones por clientes</p>
                        <span class="text-gray-300 text-sm">Total de cupones descargados un cliente en un rango de
                            fecha</span>
                    </div>
                </a>
            </div> --}}
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
