@extends('layouts.nicxa')
@section('content')
<header class="negocios-portada">
    <video src="{{asset('/video/REEL_GRUPO-NICXA.mp4')}}" width="100%" controls autoplay loop muted></video>
</header>
<section class="franquicia">
    <div class="container">
        <h1><span class="franquicia__nicxa">NICXA</span> FRANQUICIA</h1>
        <div class="franquicia__logos">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a href="https://www.gruponicxa.com.mx/promociones-nicxa/"><img src="{{asset('/img/logos/burger-logo.svg')}}" width="90" alt=""></a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-auto">
                    <figure>
                        <a href="https://www.gruponicxa.com.mx/promociones-nicxa/">
                            <img src="{{asset('/img/logos/KFC.svg')}}" width="90" alt="">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 m-auto">
                    <figure>
                        <a href="https://www.gruponicxa.com.mx/promociones-nicxa/">
                            <img src="{{asset('/img/logos/Frame.svg')}}" width="170" alt="">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure>
                        <a href="https://www.gruponicxa.com.mx/promociones-nicxa/">
                            <img src="{{asset('/img/logos/PHUT.svg')}}" width="90" alt="">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cupones">
    <div class="container pb-4">
        <h2 class="text-center pt-3 pb-2">¿Qué se te antoja hoy?</h2>
        <div class="text-center">
            <div class="col-12 text-center">
                
                <h3 style="color: #2f3235;">¿SOLO ES MEJOR QUE ACOMPAÑADO?</h3>
            </div>
            <div class="row ordena-ahora__espacio">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure  class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
            </div>
            <div class="row ordena-ahora__espacio">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/BISQUETS.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/KETIRAS.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure  class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/PZAS.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/REFRESCOS.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block">Descargar cupón</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cupon">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 text-center pt-5 ">
                    <h3 style="color: #fff;">¿VISITA SORPRESA?</h3>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/2-1.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cupon-1">
        <div class="container">
            <div class="text-center">
                <div class="col-12 text-center pt-5">
                    <h3 style="color: #2f3235;">¿CONVIVENCIA FAMILIAR?</h3>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <a href="https://www.gruponicxa.com.mx/promociones-nicxa/" class="btn btn-dark btn-block">Descargar cupón</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ordena-ahora pb-5">
    <div class="container">
        <div class="col-lg-12">
            <div class="text-center pt-5 pb-2">
                <h1>¡Ordena <span class="franquicia__nicxa">Ahora!</span></h1>
            </div>
            <div class="row pt-3">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4>Burger King</h5>
                        <li class="ordena-ahora__opciones">
                            <div class="row">
                                <div class="col">
                                    <a href="https://globalreports.info/wolop/BurgerKingMX1/1" target="_blank" class="pizza-hutp pr-3">
                                        <i class="fa-solid fa-motorcycle"></i>
                                        Delivery
                                    </a>
                                    <a href="#" class="pizza-hutp pr-3">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app
                                    </a> <br class="d-block d-sm-block-d-md-none d-lg-none">
                                    <a href="tel:9999263000" class="pizza-hut">
                                        <i class="fa-solid fa-headset"></i>
                                        999 926 3000
                                    </a><br class="d-block d-sm-block-d-md-none d-lg-none"><br class="d-block d-sm-block-d-md-none d-lg-none"><br class="d-block d-sm-block-d-md-none d-lg-none">
                                </div>
                            </div>
                        </li>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h4>KFC</h5>
                        <li class="ordena-ahora__opciones">
                            <div class="row">
                                <div class="col">
                                    <a href="https://kfc.com.mx/" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-globe"></i>
                                        kfc.com.mx
                                    </a>
                                    <a href="#" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app
                                    </a> <br class="d-block d-sm-block-d-md-none d-lg-none">
                                    <a href="tel:9995154747" class="pizza-hut">
                                        <i class="fa-solid fa-headset"></i>
                                        9995 15 4747
                                    </a>
                                </div>
                            </div>
                        </li>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                    <h4>Pizza Hut</h5>
                        <li class="ordena-ahora__opciones">
                            <div class="row">
                                <div class="col">
                                    <a href="https://www.pizzahut.com.mx/home" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-globe"></i>
                                        pizzahut.com.mx
                                    </a>
                                    <a href="#" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app
                                    </a> <br class="d-block d-sm-block-d-md-none d-lg-none">
                                    <a href="tel:999 153737" class="pizza-hut">
                                        <i class="fa-solid fa-headset"></i>
                                        9995 15 3737
                                    </a>
                                </div>
                            </div>
                        </li>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                    <h4>Los Bisquets Obregón</h5>
                        <li class="ordena-ahora__opciones">
                            <div class="row">
                                <div class="col-12">
                                    <a href="9999480578" class="pizza-hut">
                                        <i class="fa-solid fa-headset"></i>
                                        9999 48 0578
                                    </a>
                                </div>
                            </div>
                        </li>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection