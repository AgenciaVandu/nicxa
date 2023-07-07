@extends('layouts.nicxa')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/beach-on.css') }}">
        <style>
            body {
                background-color: #F4E9E8 !important;
            }
        </style>
    @endpush
    <header class="beach-back">

        <div class="d-none d-sm-none d-md-block d-lg-block">
            <img src="{{ asset('img/beach/banner/banner-1.png') }}" class="img-fluid w-100">
        </div>
        <div class="d-block d-sm-block d-md-none d-lg-none">
            <div style="padding-top: 2em;">
                <img src="{{ asset('img/beach/banner/m-banner-1.png') }}" class="img-fluid w-100">
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="cupones-beach">
            <h1 class="font-flame text-center " style="color:#003227;">
                PLAYA PUERTO PROGRESO SIN ARTIFICIALES <br>
                <span class="font-flame-regular"> CUPONERA EXCLUSIVA</span>
            </h1>
            <div class="row cup pt-5">
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-01.png') }}" class="img-fluid"
                        alt="">
                    <div>
                        <a href="img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-01.png" download="2x1 en papas medianas">
                            <img src="{{ asset('img/beach/boton-v.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-02.png') }}" class="img-fluid"
                        alt="">
                    <div>
                        <a href="img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-02.png" download="Family King">
                            <img src="{{ asset('img/beach/boton-v.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-03.png') }}" class="img-fluid"
                        alt="">
                    <div>
                        <a href="img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-03.png" download="2x1 en cono sencillo">
                            <img src="{{ asset('img/beach/boton-v.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-04.png') }}" class="img-fluid"
                        alt="">
                    <div>
                        <a href="img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-04.png" download="Combo chico w/squeso">
                            <img src="{{ asset('img/beach/boton-v.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-05.png') }}" class="img-fluid"
                        alt="">
                    <div>
                        <a href="img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-06.png" download="2x1 en nuggets">
                            <img src="{{ asset('img/beach/boton-v.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-06.png') }}" class="img-fluid"
                        alt="">
                    <div>
                        <a href="img/beach/cupones/CUPONES-REAL-WHOPPER-BEACH-02.png" download="Combo chico">
                            <img src="{{ asset('img/beach/boton-v.svg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="descubre-mas text-center">
                <a href="/beach-on-tour" target="blank_">
                    <img src="{{ asset('img/beach/boton-1.svg') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
    <section class="redes">
        <div class="palmeras">
            <div class="container">
                <div class="centrado-beach">
                    <div class="pb-5 text-center">
                        <h2 class="font-flame" style="color:#003227;">
                            SÍGUENOS EN NUESTRAS REDES SOCIALES
                        </h2>
                    </div>
                    <div class="row text-center">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="https://www.facebook.com/gruponicxa" target="blank_">
                                <img src="{{ asset('img/beach/redes/fb.png') }}" class="img-fluid" alt="logo facebook">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="https://www.instagram.com/gruponicxaoficial/" target="blank_">
                                <img src="{{ asset('img/beach/redes/ig.png') }}" class="img-fluid" alt="logo instagram">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="https://www.tiktok.com/@gruponicxa" target="blank_">
                                <img src="{{ asset('img/beach/redes/tk.png') }}" class="img-fluid" alt="logo tiktok">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="restricciones-beach">
        <div class="container">
            <div class="text-center pt-5 pb-5">
                <h5 class="font-flame">Restricciones</h5>
                <p>Los cupones son válidos hasta el 12 de septiembre del 2023. No acumulable con otras promociones o descuentos. No
                    canjeable por dinero en efectivo. No transferible. Sujeto a disponibilidad en el restaurante
                    participante. No válido en servicios de entrega a domicilio. Aplican términos y condiciones adicionales.
                    Burger King® de Grupo Nicxa®, empresas aliadas y dependencias gubernamentales que participan en la
                    campaña Real Whopper® Beach on tour México, tienen como objetivo reducir el impacto negativo de la
                    basura en las playas y áreas turísticas de la península y sus alrededores, con el principal objetivo de
                    evitar la proliferación de la fauna nociva, la acumulación de distintos tipos de basura y desechos,
                    haciendo conciencia en la sociedad sobre el cuidado del medio ambiente principalmente en la temporada
                    vacacional.
                    <br> <br>
                    ©2023 Grupo Nicxa®. Todos los derechos reservados.
                </p>
                <div class="d-none d-sm-none d-md-block d-lg-block">
                    <figure class="pt-3">
                        <img src="{{ asset('img/beach/logos.png') }}" class="200" alt="">
                    </figure>
                </div>
                <div class="d-block d-sm-block d-md-none d-lg-none">
                    <figure>
                        <img src="{{ asset('img/beach/m-aliados.png') }}" alt="aliados grupo nicxa" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
@endsection
