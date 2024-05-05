@extends('layouts.nicxa')
@section('content')
    @push('title')
        Moms get in shape - Bisquets Obregón
    @endpush

    @push('descripcion')
        <meta name="description"
            content="Pide en bisquets obregón a través de uber eats con un mínimo de compra de $150 y recibirás dentro de tu órden un volante con los pasos para hacer tu registro y obtener un pase a la Master Class">
    @endpush

    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/moms.css') }}">

        <header class="titular_moms">
            <figure>
                <img src="{{ asset('/img/moms/banner.png') }}" class="w-100" alt="">
            </figure>
            <div class="container">
                <div class="contenido">
                    
                </div>
            </div>
        </header>
    @endsection
