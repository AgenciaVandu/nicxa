{{-- Tabla para obtener las vistas por url y contarlas--}}
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
                REPORTE DE VISTAS POR URL EN UN RANGO DE FECHAS
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
            <th>Url</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($views as $view)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $view->url }}</td>
                <td>{{ $view->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
