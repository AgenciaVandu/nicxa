<table>
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>
                REPORTE DE CUPONES POR ESTADO
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                Rango de fecha: {{ \Carbon\Carbon::parse($start_date)->toDateTimeString() }} - {{ \Carbon\Carbon::parse($end_date)->toDateTimeString() }}
            </td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Franquicia</th>
            <th>Cupon descargado</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coupons as $coupon)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $coupon->created_at }}</td>
                <td>{{ $coupon->coupon->franchise }}</td>
                <td>{{ $coupon->coupon->coupon }}</td>
                <td>{{ $coupon->state }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
