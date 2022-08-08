<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                <div class="flex justify-center mt-6">
                    <p class="text-xl font-xl font-semibold">Cupones descargados por franquicia en la historia</p>
                </div>
                <div class="grid grid-cols-4 items-center justify-items-center gap-4 p-6">
                    <img src="{{ asset('img/logos/burger-logo.svg') }}">
                    <img src="{{ asset('img/logos/KFC.svg') }}">
                    <img src="{{ asset('img/logos/PHUT.svg') }}">
                    <img src="{{ asset('img/logos/Frame.svg') }}">
                </div>
                <div class="grid grid-cols-4 items-center justify-items-center gap-4 p-6 font-bold">
                    <div class="text-lg">{{ $coupon_bk }} cupones</div>
                    <div class="text-lg">{{ $coupon_kfc }} cupones</div>
                    <div class="text-lg">{{ $coupon_ph }} cupones</div>
                    <div class="text-lg">{{ $coupon_lbb }} cupones</div>
                </div>
                <div class="flex justify-center py-6">
                    <p class="text-lg font-xl font-semibold">
                        Cupones mas descargados por franquicia
                    </p>
                </div>
                <div class="grid grid-cols-4 items-center justify-items-center gap-4 px-6 mb-6">
                    @if ($coupon_mas_repetido_bk)
                    <div class="text-sm text-center">{{ $coupon_mas_repetido_bk->coupon }}</div>
                    @endif
                    @if ($coupon_mas_repetido_kfc)
                    <div class="text-sm text-center">{{ $coupon_mas_repetido_kfc->coupon }}</div>
                    @endif
                    @if ($coupon_mas_repetido_ph)
                    <div class="text-sm text-center">{{ $coupon_mas_repetido_ph->coupon }}</div>
                    @endif
                    @if ($coupon_mas_repetido_lbb)
                    <div class="text-sm text-center">{{ $coupon_mas_repetido_lbb->coupon }}</div>
                    @endif
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                <p class="text-center">
                    Cupón mas descargado:
                    @if ($coupon_mas_repetido)
                    <span class="ml-2 font-bold">{{ $coupon_mas_repetido->coupon }}</span>
                    @endif
                    <span>de</span>
                    @if ($coupon_mas_repetido)
                    <span class="font-bold">{{ $coupon_mas_repetido->franchise }}</span>
                    @endif
                </p>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                <p class="text-center">
                    Total de clientes registrados:
                    <span class="mr-2 font-bold">{{ $total_clientes }}</span>

                    <span class="ml-4">Total de cupones descargados:</span>
                    <span class="mr-2 font-bold">{{ $total_cupones }}</span>
                    <span class="ml-4">Promedio de cupones por cliente:</span>
                    <span class="mr-2 font-bold">{{ number_format($total_cupones/$total_clientes)}}</span>
                </p>
            </div>

            <div class="bg-white shadow-xl sm:rounded-lg">
                <a href="{{ route('reports.filters', 'total-coupons') }}">
                    <div class="p-6 hover:bg-rojo hover:text-white">
                        <p class="font-bold text-xl">Reporte de cupones descargados</p>
                        <span class="text-gray-300 text-sm">Total de cupones descargados por rango de fechas y por
                            franquicia</span>
                    </div>
                </a>
            </div>
            <div class="bg-white shadow-xl sm:rounded-lg mt-4">
                <a href="{{ route('reports.filters', 'client-coupons') }}">
                    <div class="p-6 hover:bg-rojo hover:text-white">
                        <p class="font-bold text-xl">Reporte de cupones por clientes</p>
                        <span class="text-gray-300 text-sm">Total de cupones descargados un cliente en un rango de
                            fechas</span>
                    </div>
                </a>
            </div>
            <div class="bg-white shadow-xl sm:rounded-lg mt-4">
                <a href="{{ route('reports.filters', 'state-coupons') }}">
                    <div class="p-6 hover:bg-rojo hover:text-white">
                        <p class="font-bold text-xl">Reporte de cupones por ciudad</p>
                        <span class="text-gray-300 text-sm">Total de cupones descargados por estado en un rango de
                            fechas</span>
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
