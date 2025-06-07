@extends('layouts.beach')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/beachon2025.css') }}">
       
    @endpush
    <section class="header">
        <div class="container">
            <div class="contenido">
                <img src="{{ asset('img/beachon2025/logo-bk-solid.svg') }}" width="300" alt="Logotipo Burger King">
                <img src="{{ asset('img/beachon2025/logo-beach-on.svg') }}" class="img-fluid" alt="">
            </div>
            
        </div>
    </section>
    <section class="descripcion">
        <div class="container">
            <div class="descripcion__contenido">
                <p class="text-center pb-4">Real Whopper Beach es una campaña de conciencia ambiental impulsada por Burger King y
                    aliados, que desde el año 2023 busca activar a las comunidades costeras a través de limpiezas de playa,
                    talleres educativos y activaciones con impacto positivo.</p>
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 col-sm-12">
                        <video src="{{ asset('/video/BK_Spot_PreCampaña_4.mp4') }}" width="100%" autoplay preload="metadata"
                        loop muted controls></video>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <span>2023 | 2024</span>
                        <h1>
                            3,836 <br>
                        </h1>
                        <h3>Kilogramos de basura</h3>
                        <div class="row pt-3 pl-5 pr-5">
                            <div class="col text-center">
                                <h2>
                                    1,826 <br>
                                </h2>
                                <p>Participantes</p>
                            </div>
                            <div class="col text-center">
                                <h2>
                                    3,339 <br>
                                </h2>
                                <p>Merch <br> entregada</p>
                            </div>
                            <div class="col text-center">
                                <h2>
                                    1,224 <br>
                                </h2>
                                <p>Hamburguesas <br> entregadas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tercera-edicion">
        <div class="container">
            <div class="tercera-edicion__contenido text-center">
                <img src="{{ asset('img/beachon2025/logo-3ra-edicion.svg') }}" width="320" alt="">
                <p>Celebramos la 3ª edición de Real Whopper Beach 2025, una campaña de verano que impulsa talleres
                    educativos, limpiezas masivas en playas de Yucatán y activaciones ambientales, sumando aliados y
                    voluntarios para generar impacto real en nuestras costas.</p>
            </div>
        </div>
        <div class="grid-container mt-5 mb-5">
            <div class="box" style="grid-area: box-1" >
               <h1>Talleres</h1>
            </div>
            <div class="box" style="grid-area: box-2">
                <h4>Playas & Fauna</h4>
                <p>Taller enfocado en la importancia de las playas y especies que la habitan. Acompañado de dinámicas interactivas ysesiones de dibujo.</p>
                <span>19 de Julio / Sucursal Montejo / 12:00pm</span>

            </div>
            <div class="box" style="grid-area: box-3">
                <h4>Invertebrados Marionos</h4>
                <p>Interacción con ejemplares vivos y reptiles, y conocer su importancia en los ecosistemas.</p>
                <span>2 de agosto / Sucursal Norte / 12:00pm</span>
            </div>
            <div class="box" style="grid-area: box-4">
                <h4>Impacto ambiental sobre la costa en las tortugas</h4>
                <p>Descubre la importancia ecológica de las tortugas marinas y cómo impacta el ser humanos en las costas que afectan a las tortugas.</p>
                <span>9 de agosto / Sucursal Oriente / 12:00pm</span>
            </div>
            <div class="box" style="grid-area: box-5">
                <h1>Limpiezas</h1>
            </div>
            <div class="box" style="grid-area: box-6">
                <h4>Chicxulub</h4>
                <p>5 de Julio <br> 7:00am</p>
            </div>
            <div class="box" style="grid-area: box-7">
                <h4>Telchac Puerto</h4>
                <p>12 de Julio <br> 7:00am</p>
            </div>
            <div class="box" style="grid-area: box-8">
                <h4>Chuburná</h4>
                <p>26 de Julio <br> 7:00am</p>
            </div>
            <div class="box" style="grid-area: box-8">
                <h4>Progreso</h4>
                <p>17 de Agosto <br> 7:00am</p>
            </div>
           
        </div>
    </section>

    <section class="inscripcion">
        <div class="container">
            <div class="inscripcion__contenido text-center">
                <h2>¡Sé de los primeros 45 en inscribirte y recibe merch oficial!</h2>
                <span>Además, podrías tener la oportunidad de contar con transporte gratuito al evento.</span>
                <div class="merch">
                    <img src="{{asset('img/beachon2025/merch.png')}}" class="img-fluid" alt="Mercancia">
                </div>
                <p>En el malecón de Progreso realizaremos activaciones especiales con entrega de cupones, merch, dinámicas interactivas, bailes, juegos y un equipo de promo entregando Whoppers gratis.</p>
            </div>
        </div>
    </section>

    <section class="fechas">
        <img src="{{asset('img/beachon2025/botella.png')}}" class="img-fluid botella" alt="botella">
        <div class="container">
            
            <div class="fechas__contenido">
               <a class="btn btn-primary inscribete">INSCRÍBETE</a>
            </div>
        </div>
        <img src="{{asset('img/beachon2025/estrella.png')}}" class="img-fluid estrella" alt="estrella de mar">
        <div class="patrocinadores">
            <div class="container">
                <div class="patrocinadores__contenido text-center">
                    <img src="{{asset('img/beachon2025/logo-patrocinadores.svg')}}" width="320" alt="">
                    <div class="row">
                        <div class="col m-auto">
                            <img src="{{asset('img/beachon2025/logo-limpiemos-yuc.svg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col m-auto">
                            <img src="{{asset('img/beachon2025/logo-bk-solid.svg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col m-auto">
                            <img src="{{asset('img/beachon2025/logo-uber-eats-vertical.svg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="row pt-5 pb-5">
            <div class="col-md-4 col-sm-12">
                <img src="{{ asset('img/beachon2025/logo-beach-on-positivo.svg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 col-sm-12">
                <h1 class="contacto">Contáctanos</h1>
            </div>
            <div class="col-md-4 col-sm-12 enlaces m-auto">
                <a href="#">POLÍTICAS</a>
                <a href="#">AVISO DE PRIVACIDAD</a>
                <a href="#">TÉRMINOS Y CONDICIONES</a>
            </div>
        </div>
    </footer>
    
@endsection
