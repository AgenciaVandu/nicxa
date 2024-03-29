<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resultado de la busqueda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-end p-6">
                    <a href="{{ route('export.coupons.clients',[$start_date,$end_date,$client_id]) }}" class="text-sm text-gray-500 hover:text-gray-700">
                        {{ __('Exportar excel') }}
                    </a>
                </div>
                {{-- Table with tailwind v2.0 --}}
                <div class="table-responsive p-4 overflow-x-auto relative">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="text-center p-2">#</th>
                                <th class="text-center p-2">Fecha</th>
                                <th class="text-center p-2">Franquicia</th>
                                <th class="text-center p-2">Canal</th>
                                <th class="text-center p-2">Cupon descargado</th>
                                <th class="text-center p-2">Estado</th>
                                <th class="text-center p-2">Email</th>
                                <th class="text-center p-2">Phone</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $coupon->created_at }}</td>
                                    <td class="text-center">{{ $coupon->coupon->franchise }}</td>
                                    <td class="text-center">{{ $coupon->source }}</td>
                                    <td class="text-center">{{ $coupon->coupon->coupon }}</td>
                                    <td class="text-center">{{ $coupon->state }}</td>
                                    <td class="text-center">{{ $coupon->client->email }}</td>
                                    <td class="text-center">{{ $coupon->client->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Fin de la tabla --}}

            </div>
        </div>
    </div>
</x-app-layout>

