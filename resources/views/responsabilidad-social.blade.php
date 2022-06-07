@extends('layouts.nicxa')
@section('content')
<header class="portada-fundacion">
    <video src="/video/fundacion.mp4#t=2" width="100%" autoplay preload="metadata" loop muted controls></video>
</header>
<section class="acciones pt-5">
    <div class="container">
        <div class="text-center">
            <h2>Nuestras acciones y comunidad</h2>
            <p class="acciones__texto">Como empresa tenemos el objetivo de generar impacto positivo en la comunidad, por ello, innovamos en nuestros procesos empresariales y corporativos para tener a la Responsabilidad Social como parte fundamental y meta de nuestra manera de trabajar. En Grupo Nicxa nos esforzamos diariamente por mejorar nuestro compromiso con la sociedad, mediante estrategias comerciales que encuentren el balance entre la productividad y la conciencia social, favoreciendo a la beneficencia pública.</p>
        </div>
        <div class="text-center pt-3">
            <h4>Causas a las que hemos apoyado</h4>
            <div class="acciones__logos">
                <div class="">
                    <div class="row">
                        <div class="col">
                            <img src="/img/icons/child.svg" width="120" alt="">
                        </div>
                        <div class="col">
                            <img src="/img/icons/education.svg" width="120" alt="">
                        </div>
                        <div class="col">
                            <img src="/img/icons/culture.svg" width="120" alt="">
                        </div>
                        <div class="col">
                            <img src="/img/icons/theater.svg" width="120" alt="">
                        </div>
                        <div class="col">
                            <img src="/img/icons/theater-1.svg" width="120" alt="">
                        </div>
                        <div class="col">
                            <img src="/img/icons/salud.svg" width="120" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inmobiliaria" id="inmobiliaria">
    <div class="container">
        <div class="row pt-5 pb-5">
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <video src="/video/multimedia.mp4#t=20s" width="60%" autoplay  loop muted controls></video>
            </div> -->
            <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                <div class="text-center">
                    <h2><span class="franquicia__nicxa">NICXA</span><span style="color: #fff;">INMOBILIARIA</span></h2>
                    <p class="inmobiliaria__texto">Grupo Nicxa Inmobiliaria es una unidad de negocio de la empresa, la cual consolida el compromiso para mantenernos cerca de ti y con una amplia gama de opciones para ofrecerte algo diferente.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection