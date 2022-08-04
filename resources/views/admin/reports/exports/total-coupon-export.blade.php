<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Create at</th>
            <th>Franchise</th>
            <th>Chanel</th>
            <th>Coupon</th>
            <th>Downloads</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coupons as $coupon)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $coupon->created_at }}</td>
                <td>{{ $coupon->franchise }}</td>
                <td>{{ $coupon->source }}</td>
                <td>{{ $coupon->coupon }}</td>
                <td>{{ $coupon->clients_count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
