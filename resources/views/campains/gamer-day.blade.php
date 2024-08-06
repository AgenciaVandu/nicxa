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
    <div class="red">
        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/redblur.png') }}" class="img-fluid" alt="">
    </div>
    <div class="purple">
        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/purpleblur.png') }}" class="img-fluid"
            alt="">
    </div>
    <div class="d-none d-sm-none d-md-none d-lg-block">
        <header class="gamer-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">

                    </div>
                    <div class="col-lg-6 col-md-12 text-center gamer-titular">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo.svg') }}" width="200"
                            alt="Logotipo Gamer Day">
                        <h2 class="gotham-bold text-white pt-3"> TORNEO GAMING <br> <span class="green">LIGA FÚTBOL
                                2024</span>
                            </h3>
                            <h2 class="bg-green gotham-bold">GANA HASTA $5,000</h2>
                            <h3 class="gotham-light text-white">29 DE AGOSTO</h4>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="d-block d-sm-block d-md-block d-lg-none">
        <header class="gamer-header">
            <div class="col-lg-6 col-md-12 text-center gamer-titular">
                <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo.svg') }}" width="200"
                    alt="Logotipo Gamer Day">
                <h2 class="gotham-bold text-white pt-3"> TORNEO GAMING <br> <span class="green">LIGA FÚTBOL 2024</span>
                </h2>
                <h4 class="bg-green gotham-bold">GANA HASTA $5,000</h4>
                <h4 class="gotham-light text-white">29 DE AGOSTO</h3>
            </div>
        </header>
    </div>
    <section class="descripcion">
        <div class="container">
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="contenido">
                    <div class="imagen">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/soccer.webp') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="texto-contenido">
                        <h3>¡Celebra el Gamer Day <br>
                            con Pizza Hut! </h3>
                        <hr width="5%" align="left">
                        <p class="gotham-light">¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un
                            evento
                            especial dedicado a todos los amantes de los videojuegos! Participa en nuestro torneo de EA
                            Sports
                            FC 24 y demuestra tus habilidades en la cancha virtual.

                            <br><br>
                            No pierdas la oportunidad de convertirte en el campeón del Gamer Day y llevarte a casa un
                            increíble
                            premio! ¡Te esperamos en Pizza Hut para celebrar el espíritu gamer como nunca antes!
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-block d-lg-none">
                <div class="row imagen-m">
                    <div class="col-12">
                        <div class="texto-contenido-m text-white">
                            <h3>¡Celebra el Gamer Day <br>
                                con Pizza Hut! </h3>
                            <hr width="5%" align="left" color="#fff">
                            <p class="gotham-light">¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un
                                evento
                                especial dedicado a todos los amantes de los videojuegos! Participa en nuestro torneo de EA
                                Sports
                                FC 24 y demuestra tus habilidades en la cancha virtual.

                                <br><br>
                                No pierdas la oportunidad de convertirte en el campeón del Gamer Day y llevarte a casa un
                                increíble
                                premio! ¡Te esperamos en Pizza Hut para celebrar el espíritu gamer como nunca antes!
                            </p>
                        </div>
                        <div class="imagen-soccer col-12 text-center">
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/soccer2.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="premios">
        <div class="container">
            <div class="text-center">
                <h2 class="gotham-bold text-white">PREMIOS</h2>
            </div>
            <div class="lugares-premios">
                <div class="row espacio_premios_uno">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <h1 class="gotham-bold">$5,000</h1>
                        <p class="gotham-bold text-white">Primer Lugar</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <h1 class="gotham-bold">$4,000</h1>
                        <p class="gotham-bold text-white">Segundo Lugar</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <h1 class="gotham-bold">$3,000</h1>
                        <p class="gotham-bold text-white">Tercer Lugar</p>
                    </div>
                </div>
                <div class="row espacio_premios mt-4">
                    <div class="col-lg-4  text-center">
                        <h1 class="gotham-bold">$2,000</h1>
                        <p class="gotham-bold text-white">Cuarto Lugar</p>
                    </div>
                    <div class="col-lg-4  text-center">
                        <h1 class="gotham-bold">$1,000</h1>
                        <p class="gotham-bold text-white">Quinto Lugar</p>
                    </div>
                    <div class="col-lg-4  text-center">
                        <h1 class="gotham-bold">$500</h1>
                        <p class="gotham-bold text-white">Sexto Lugar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sucursales">
        <div class="container">
            <h2 class="text-center gotham-bold text-white">ESCOGE TU SUCURSAL</h2>
            <div class="sucursal">
                <div class="row ">
                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="img-sucursal text-right">
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/oriente.webp') }}"
                                class="img-fluid contenido_sucursal" alt="Pizza Hut Sucursal oriente Mérida">
                        </div>
                        <div class="detalles">
                            <span class="gotham-bold">Pizza Hut Oriente</span> <span class="gotham-bold">10:00 A.M.</span>
                        </div>
                        <small class="text-white">Mérida</small>
                        <div class="botones pt-3">
                            <div class="d-none d-sm-none d-md-block d-lg-block">
                                <a href="https://forms.gle/HdTK4ZWNNFrVAeTF9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/bmxXrrNWpTuPtfcd9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                            </div>
                            <div class="d-block d-sm-block d-md-none d-lg-none">
                                <a href="https://forms.gle/HdTK4ZWNNFrVAeTF9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/bmxXrrNWpTuPtfcd9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="img-sucursal text-right">
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/portillo.webp') }}"
                                class="img-fluid contenido_sucursal" alt="Pizza Hut Sucursal oriente Mérida">
                        </div>
                        <div class="detalles">
                            <span class="gotham-bold">Pizza Hut Portillo</span> <span class="gotham-bold">10:00
                                A.M.</span>
                        </div>
                        <small class="text-white">Mérida</small>
                        <div class="botones pt-3">
                            <div class="d-none d-sm-none d-md-block d-lg-block">
                                <a href="https://www.start.gg/tournament/liga-hut-gaming-by-pizza-hut-fc-24/details" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/8SSosJRpT9Z27V7v7" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                            </div>
                            <div class="d-block d-sm-block d-md-none d-lg-none">
                                <a href="https://www.start.gg/tournament/liga-hut-gaming-by-pizza-hut-fc-24/details" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/8SSosJRpT9Z27V7v7" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cuenta">
        <div class="container">
            <div class="fondo">
                <div class="row contenido-cuenta">

                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto ">
                        <h1 class="gotham-bold text-white">Torneo Gaming 2024</h1>
                        <hr width="5%" align="left" color="#fff">
                        <p class="text-white gotham-light">Cuenta regresiva</p>
                        <div class="fecha-fin">
                            <div id="cuenta">

                                <div class="estrella1">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/Star8.svg') }}"
                                        width="20" alt="Estrella">
                                </div>
                                <div class="estrella2">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/Star8.svg') }}"
                                        width="20" alt="Estrella">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/gamers.webp') }}"
                            class="img-fluid" alt="Gamers">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="prefooter">
        <div class="container">
            <div class="row text-center">
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo-pizzahut.svg') }}"
                            width="220" alt="">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                       <div >
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/pizzahutmovil.svg') }}"
                        width="70" alt="">
                       </div>
                    </div>
                </div>
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                       <div >
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/uber-eats.svg') }}" width="120"
                        alt="">
                       </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                       <div >
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/uber-eats.svg') }}" width="70"
                        alt="">
                       </div>
                    </div>
                </div>
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/pcgamers.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                       <div >
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/pcgamers.png') }}"
                        width="90" alt="">
                       </div>
                    </div>
                </div>
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                       <div >
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/e-stom.svg') }}" width="90"
                        alt="">
                       </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                       <div >
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/e-stom.svg') }}" width="60"
                        alt="">
                       </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{asset('js/contador.min.js')}}"></script>
    <script src="{{asset('js/contconfig.js')}}"></script>
    @endpush
@endsection
