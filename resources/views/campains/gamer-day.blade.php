@extends('layouts.nicxa')
@push('title')
    Gamer day x Pizza Hut - Grupo Nicxa
@endpush
@push('descripcion')
    <meta name="description"
        content="¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un evento especial dedicado a todos los amantes de los videojuegos! Participa en nuestro  torneo de EA Sports FC 24 y demuestra tus habilidades  en la cancha virtual.">
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('css/game-day.css') }}">
@endpush
@section('content')
    <header class="gamer-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">

                </div>
                <div class="col-lg-6 col-md-12 text-center gamer-titular">
                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo.svg') }}" width="200"
                        alt="Logotipo Gamer Day">
                    <h2 class="gotham-bold text-white pt-3"> TORNEO GAMING <br> <span class="green">LIGA FÚTBOL 2024</span></h2>
                    <h2 class="bg-green gotham-bold">GANA HASTA $7,000</h2>
                    <h3 class="gotham-light text-white">29 DE AGOSTO</h3>
                </div>
            </div>
        </div>
    </header>
    <div class="descripcion">
        <div class="container">
            <div class="contenido">
                <div class="imagem">
                    <img src="{{asset('img/gestion2024/campains/pizzahut/gamer-day/soccer.webp')}}" class="img-fluid" alt="">
                </div>
                <div class="texto-contenido">
                    <h3>¡Celebra el Gamer Day <br>
                        con Pizza Hut! </h3>
                    <hr width="5%" align="left">
                    <p class="gotham-light">¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un evento especial dedicado a todos los amantes de los videojuegos! Participa en nuestro  torneo de EA Sports FC 24 y demuestra tus habilidades  en la cancha virtual.

                        <br><br>
                        No pierdas la oportunidad de convertirte en el campeón del Gamer Day y llevarte a casa un increíble premio!  ¡Te esperamos en Pizza Hut para celebrar el espíritu gamer como nunca antes!
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
