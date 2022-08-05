<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Franquicia</th>
            <th>Canal</th>
            <th>Cupon descargado</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coupons as $coupon)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $coupon->created_at }}</td>
                <td>{{ $coupon->coupon->franchise }}</td>
                <td>{{ $coupon->coupon->source }}</td>
                <td>{{ $coupon->coupon->coupon }}</td>
                <td>{{ $coupon->client->email }}</td>
                <td>{{ $coupon->client->phone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
