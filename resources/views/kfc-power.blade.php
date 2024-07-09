@extends('layouts.nicxa')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/powerkfc.css') }}">
        <style>
            body {
                background-color: #F4E9E8;
            }
        </style>
    @endpush
    @push('title')
       Únete al reto #KFCCHICKENLEGS  - Por Grupo Nicxa
    @endpush

    @push('descripcion')
        <meta name="description"
            content="KFC te invita a unirte al reto #KFCChickenLegs. Demuestra tus habilidades físicas para tener la oportunidad de ganar increíbles premios. Este reto está abierto para todo el público.">
    @endpush
    <header class="beach-back" style="background-color: #F2E2D1;">
        <div class="d-none d-sm-none d-md-block d-lg-block">
            <img src="{{ asset('img/power/banner.png') }}" class="img-fluid w-100">
        </div>
        {{-- <div class="d-block d-sm-block d-md-none d-lg-none">
            <div style="padding-top: 2em;">
                <img src="{{ asset('img/beach/banner/m-banner-2.webp') }}" class="img-fluid w-100">
            </div>
        </div> --}}
    </header>
    <div class="bg-red">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m-auto">
                    <h1>¿Qué es el reto #KFCChickenLegs?</h1>
                    <p>KFC te invita a unirte al reto #KFCChickenLegs. Demuestra tus habilidades físicas para tener la oportunidad de ganar increíbles premios. Este reto está abierto para todo el público.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="{{asset('img/power/persona.png')}}" class="img-fluid" alt="Runner">
                </div>
            </div>
        </div>
    </div>
    <div class="como-participar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m-auto">
                    <h2>¿Cómo participar?</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ol>
                        <li>Grábate replicando el <span>video del Coronel</span></li>
                        <li>Publica tu video en TikTok usando el hashtag #KFCChickenLegs.</li>
                        <li>Asegúrate de etiquetar a @Gruponicxa en tu publicación</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="fechas-importantes">
        <div class="container">
            <h2>FECHAS IMPORTANTES</h2>
            <div class="fechas">
                <div class="dia">
                    <h2>12 DE AGOSTO</h2>
                    <small>Cierre del conteo de visualizaciones</small>
                </div>
                <div class="dia">
                    <h2>13 DE AGOSTO</h2>
                    <small>Anuncio de ganadores</small>
                </div>
            </div>
            <div class="cta-fechas">
                <div class="btn btn-danger btn-lg">¡Participa ahora y demuestra tus habilidades!</div>
            </div>
        </div>
    </div>
    <section class="redes">
        <div class="palmeras">
            <div class="container">
                <div class="centrado-beach">
                    <div class="pb-5 text-center">
                        <h2 class="font-flame" style="color:#003227;">
                            DESCUBRE MÁS EN NUESTRAS REDES SOCIALES
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
    <div class="restricciones-power">
        <div class="container">
            <div class="text-left pt-5 pb-5">
                <li style="padding: 0; list-style: none;">Bases para participar
                    <li>El concurso sólo es válido para personas físicas que sean residentes de los estados de Quintana Roo y Yucatán.</li>
                    <li>El concurso es individual y solo se premiara al titular del video y de la cuenta de TikTok</li>
                    <li>Si los participantes son menores de edad deberán de contar con la autorización de sus padres o tutor legal.</li>
                </li>
                <li style="padding: 0; list-style: none;">Bases para participar
                    <li>El concurso sólo es válido para personas físicas que sean residentes de los estados de Quintana Roo y Yucatán.</li>
                    <li>El concurso es individual y solo se premiara al titular del video y de la cuenta de TikTok</li>
                    <li>Si los participantes son menores de edad deberán de contar con la autorización de sus padres o tutor legal.</li>
                </li>
                <li style="padding: 0; list-style: none;">Bases para participar
                    <li>El concurso sólo es válido para personas físicas que sean residentes de los estados de Quintana Roo y Yucatán.</li>
                    <li>El concurso es individual y solo se premiara al titular del video y de la cuenta de TikTok</li>
                    <li>Si los participantes son menores de edad deberán de contar con la autorización de sus padres o tutor legal.</li>
                </li>
                <li style="padding: 0; list-style: none;">Bases para participar
                    <li>El concurso sólo es válido para personas físicas que sean residentes de los estados de Quintana Roo y Yucatán.</li>
                    <li>El concurso es individual y solo se premiara al titular del video y de la cuenta de TikTok</li>
                    <li>Si los participantes son menores de edad deberán de contar con la autorización de sus padres o tutor legal.</li>
                </li>
                <li style="padding: 0; list-style: none;">Bases para participar
                    <li>El concurso sólo es válido para personas físicas que sean residentes de los estados de Quintana Roo y Yucatán.</li>
                    <li>El concurso es individual y solo se premiara al titular del video y de la cuenta de TikTok</li>
                    <li>Si los participantes son menores de edad deberán de contar con la autorización de sus padres o tutor legal.</li>
                </li>
                


            </div>
        </div>
    </div>
@endsection
