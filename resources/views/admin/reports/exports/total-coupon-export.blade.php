<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Create at</th>
            <th>Franchise</th>
            <th>Chanel</th>
            <th>Coupon</th>
            <th>Email</th>
            <th>Phone</th>
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
                <td>{{ $coupon->client->email }}</td>
                <td>{{ $coupon->client->phone }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
