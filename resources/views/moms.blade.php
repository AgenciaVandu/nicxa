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
            <img src="{{ asset('/img/moms/banner.png') }}" class="w-100 pt-5" alt="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="contenido__interior">
                            <img class="icono" src="{{ asset('/img/moms/calendario.svg') }}" width="30" alt="calendario">
                            <img src="{{ asset('/img/moms/mayo.png') }}" class="img-fluid" alt="horario">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="contenido__interior">
                            <img class="icono" src="{{ asset('/img/moms/reloj.svg') }}" width="30" alt="calendario">
                            <img src="{{ asset('/img/moms/hora.png') }}" class="img-fluid" alt="horario">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="contenido__interior">
                            <img class="icono" src="{{ asset('/img/moms/tag.svg') }}" width="30" alt="calendario">
                            <img src="{{ asset('/img/moms/lugar.png') }}" class="img-fluid" alt="horario">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="como-asistir">
            <div class="container">
                <h1>
                    ¿CÓMO ASISTIR A LA CLASE DE EJERCICIO FUNCIONAL?
                </h1>
                <p>Pide en Bisquets Obregón a través de Uber Eats con un mínimo de compra de $150 y recibirás dentro de tu orden
                    un volante con los pasos para hacer tu registro y obtener tu pase a la Master Class</p>
                <ul>
                    <li> <img src="{{ asset('img/moms/uno.png') }}" width="20" alt="hora">
                        Escanea el código QR que aparece en el volante.</li>
                    <li><img src="{{ asset('img/moms/dos.png') }}" width="20" alt="hora"> Llena el formulario e ingresa
                        tu No. de pedido.</li>
                    <li><img src="{{ asset('img/moms/tres.png') }}" width="20" alt="hora"> Listo, ya tienes tu acceso.
                    </li>
                </ul>
                <p>Las primeras 100 personas en llegar al evento recibirán un Kit Fitness
                    de Los Bisquets Obregón & Uber Eats.</p>
                <p>Después de la clase, ¡Disfruta de un delicioso Brunch por Bisquets Obregón!</p>
            </div>
        </section>

        <section class="coaches">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 conoce">
                        <div class="conoce__contenido">
                            <h1>CONOCE A LAS <br>
                                <span>COACHES</span>
                            </h1>
                        </div>
                        <div class="mariel__contenido">
                            <img src="{{ asset('/img/moms/mariel.png') }}" class="img-fluid" alt="Coache Mariel">
                            <h4>Mariel </h4>
                            <span>Coach de Entrenamientos Híbridos.</span>
                        </div>
                        <div class="llevar text-left mt-4">
                            <h1>¿QUÉ NECESITO LLEVAR?</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 liz">
                        <div class="liz__contenido">
                            <img src="{{ asset('/img/moms/liz.png') }}" class="img-fluid" alt="Coache Liz">
                            <h4>Liz Contreras </h4>
                            <span>Entrenadora personal.</span>
                        </div>
                        <div class="cuerpo__contenido">
                            <p>El cuerpo alcanza <br> lo que la mente cree.</p>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="llevar_uno text-left mt-4">
                        <h1>¿QUÉ NECESITO LLEVAR?</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6 pt-3">
                            <img src="{{asset('/img/moms/agua.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 pt-3">
                            <img src="{{asset('/img/moms/ropa.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 pt-3">
                            <img src="{{asset('/img/moms/toalla.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 pt-3">
                            <img src="{{asset('/img/moms/ropa-2.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cta_moms">
            <div class="container">
                <p>Pide Bisquets Obregón a través de Uber Eats y</p>
                <a href="https://www.ubereats.com/mx/brand/bisquets-obregon?_fallback_redirect=https://www.ubereats.com/mx/brand/bisquets-obregon&referrer=singular_click_id%3D7e99f647-c757-4b4b-9e0b-e07ab130ebf5&sl_id=rnhi&utm_campaign=Pauta_Nixca" class="btn btn-primary">RESERVA TU LUGAR AHORA</a>
                <p class="pt-2" style="color: #06C167">¡Inscríbete ahora! Cupo límitado.</p>
            </div>
        </section>


    @endsection
