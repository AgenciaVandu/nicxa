@extends('layouts.nicxa')
@section('content')
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
@endpush
@push('title')
Nuestra meta eres tú
@endpush
@push('descripcion')
<meta name="description" content="En Grupo Nicxa, nuestro objetivo principal es servirte de manera profesional y satisfactoria. Buscamos generar clientes en todos los lugares posibles y no descansaremos hasta llegar a ti. Nuestra meta es que como empleado o como cliente, estés feliz con nuestro servicio, es por eso que en Grupo Nicxa, nuestra meta eres tú.">
@endpush
<header class="header">
    <video src="{{asset('/video/index.mp4')}}" width="100%" autoplay preload="metadata" loop muted controls></video>
</header>
<section class="quienes-somos">
    <div class="container">
        <div class="text-center">
            <h1><!-- <span class="titulo">Sobre nosotros</span> -->¿Quiénes somos?</h1>
            <p class="acciones__texto">En Grupo Nicxa, nuestro objetivo principal es servirte de manera profesional y satisfactoria. Buscamos generar clientes en todos los lugares posibles y no descansaremos hasta llegar a ti. Nuestra meta es que como empleado o como cliente, estés feliz con nuestro servicio, es por eso que en Grupo Nicxa, nuestra meta eres tú.</p>
        </div>
    </div>
</section>
<section class="timeline pb-5">
    <div class="container-fluid text-center">
        <h2 class="pb-3 reveal-title"><span class="franquicia__nicxa ">Nuestra </span>Historia</h2>
        <div class="timeline__espacio">
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="row">
                    <div class="col reveal">
                        <img src="{{asset('img/timeline/up/1.svg')}}" class="img-fluid">
                    </div>
                    <div class="col reveal-2">
                        <img src="{{asset('img/timeline/up/3.svg')}}" class="img-fluid">
                    </div>
                    <div class="col reveal-4">
                        <img src="{{asset('img/timeline/up/5.svg')}}" class="img-fluid">
                    </div>
                    <div class="col reveal-6">
                        <img src="{{asset('img/timeline/up/7.svg')}}" class="img-fluid">
                    </div>
                    <div class="col reveal-8">
                        <img src="{{asset('img/timeline/up/9.svg')}}" class="img-fluid">
                    </div>
                </div>
                <div class="linea-tiempo reveal-line">
                    <img src="{{asset('/img/timeline/linea.svg')}}" width="100%" height="auto">
                </div>
                <div class="row">
                    <div class="col reveal-1">
                        <img src="{{asset('img/timeline/down/2.svg')}}" width="220">
                    </div>
                    <div class="col reveal-3">
                        <img src="{{asset('img/timeline/down/4.svg')}}" width="220">
                    </div>
                    <div class="col reveal-5">
                        <img src="{{asset('img/timeline/down/6.svg')}}" width="220">
                    </div>
                    <div class="col reveal-7">
                        <img src="{{asset('img/timeline/down/8.svg')}}" width="220">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-block d-lg-none">
            <div class="reveal">
                <figure>
                    <img src="/img/timeline-m.svg" class="img-fluid" alt="linea del tiempo Grupo Nicxa">
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="highlights">
    <div class="container">
        <p class="text-center acciones__texto">Ponemos toda nuestra pasión a lo que hacemos para dar siempre lo mejor de nosotros para ti. Vivimos a través del sabor, enlazándonos con la cultura que vivimos y cuidando cada detalle para ti y nuestros colaboradores Nos caracterizamos por crear momentos a tu lado en cada una de nuestras sucursales, donde seguramente tienes una anécdota que contar, ¡porque eso queremos ser parte de tu vida!</p>
        <div class="d-block d-sm-block d-md-block d-lg-block">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h2 class="cantidad" id="cont1">87</h2>
                    <p class="">Sucursales</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h2 class="cantidad"><span id="cont2"></span></h2>
                    <p class="">Colaboradores</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h2 class="cantidad">+<span id="cont3">30</span></h2>
                    <p class="">Años de historia</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h2 class="cantidad">+
                        <span id="cont4"></span>

                    </h2>
                    <p class="">de clientes satisfechos</p>
                </div>
                <span id="cont5"></span>
            </div>
        </div>
        <!-- <div class="d-block d-sm-block d-md-none d-lg-none">
            <div class="row text-center">
                <div class="col-6">
                    <h1 class="cantidad" id="cont1">87</h1>
                    <p class="">Sucursales</p>
                </div>
                <div class="col-6">
                    <h1 class="cantidad" id="cont2">2500</h1>
                    <p class="">Colaboradores</p>
                </div>
                <div class="col-6">
                    <h1 class="cantidad">+<span id="cont3">0</span></h1>
                <p class="">Años de historia</p>
                </div>
                <div class="col-6">
                    <h1 class="cantidad">+<span id="cont4">1</span>,<span>000</span>000</h1>
                <p class="">de clientes satisfechos</p>
                </div>
            </div>
        </div> -->
    </div>
</section>
@push ('scripts')
<script src="/js/cont.js"></script>
<script src="/js/timeline.js"></script>
<script>
    $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>
@endpush
@endsection