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
{{-- MODAL --}}
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                @if (session('error'))
                <div class="alert-text alert alert-warning" role="alert">
                    {{ session('error') }}
                </div>
                @elseif (session('success'))
                <div class="alert-text alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('enviar')}}" method="post" id="formulario">
                    @csrf
                    <div class="form-content">
                        <div id="alerta" class="" role="alert">

                        </div>
                        <label for="nombre" style="color: #000">Nombre</label>
                        <input type="text" class="mb-3 input_bg form-control" name="nombre" placeholder="Ingresa tu nombre" />

                        <!--
                            <label for="apellido">Apellido</label>
                            <input type="text" class="mb-3 input_bg form-control" name="apellido" placeholder="Ingresa tu apellido" />
                        -->
                        <label for="telefono" style="color: #000">Teléfono</label>
                        <input type="tel" class="mb-3 input_bg form-control" name="telefono" placeholder="Ingresa tu numero de teléfono" />

                        <label for="email" style="color: #000">Correo</label>
                        <input type="email" class="mb-3 input_bg form-control" name="correo" placeholder="Ingresa tu correo" />

                        <?php
                        if (isset($_GET['utm_source'])) {
                            $utm_source = $_GET['utm_source'];

                            if ($utm_source == 'facebook') {
                                $utm_source = 'Facebook';
                            } elseif ($utm_source == 'google') {
                                $utm_source = 'Google';
                            }elseif ($utm_source == 'sms') {
                                $utm_source = 'SMS';
                            }
                            echo ('
                            <input type="hidden" name="utm_souce" value="' . $utm_source . '"/>');
                        } else {
                            echo ('
                            <input type="hidden" name="utm_souce" value="none"/>');
                        }
                        ?>
                        <input id="campo_cupon" type="hidden" name="cupon" value="none" />
                        <input id="url_cupon" type="hidden" name="url_cupon" value="none" />
                        <input id="marca_cupon" type="hidden" name="marca" value="none" />
                        <button type="submit" class="btn-lg btn-block btn-dark">
                            Registrarme
                        </button>
                        <span class="mt-5 text-bk">
                            <p class="mt-3 restricciones">
                                Al registrarte aceptas los terminos y condiciones de la promoción seleccionada.
                                Haz click <a id="terminos" class="terminos" href="#" target="_blank">aquí</a> para verlos.
                                <br>
                                <a class="footer-a-b" href="{{url('Aviso de Privacidad.pdf')}}">Politicas de privacidad</a>
    
                            </p>
                            <img class="marcas" src="{{url('marcas.png')}}" alt="" srcset="">
                        </span>
                    </div>
                </form>
                <img src="{{url('assets/form_banner_burgerking.png')}}" class="img-form" width="400px" height="auto" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
<section class="cupones-nicxa">
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
                    {{-- <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Bastones de Cajeta', '{{url('assets/ph_cupones/pz_bastones_cajeta.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar-b">Descargar cupón</button> --}}
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Kruncher', '{{url('/img/cupones-1/uno/1.png')}}', 'KFC' ,'{{url('terminos/kfc/Kruncher mayo LEGALES.jpg')}}')" >Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Nueva My Box', '{{url('/img/cupones-1/uno/2.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" >Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure  class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Combo Whopper + cono sencillo', '{{url('/img/cupones-1/uno/3.png')}}', 'Burger King' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Nuggets + papas grandes', '{{url('/img/cupones-1/uno/4.png')}}', 'Burger King' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                    </div>
                </div>
            </div>
            <div class="row ordena-ahora__espacio">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/BISQUETS.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('4 Bisquets Originales', '{{url('/img/cupones-1/uno/new/BISQUETS.png')}}', 'KFC' ,'{{url('terminos/ph/4 bisquetes mayo LEGALES.jpg')}}')">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/KETIRAS.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('3 Ke-tiras', '{{url('/img/cupones-1/uno/new/KETIRAS.png')}}', 'KFC' ,'{{url('terminos/ph/3 ketiras mayo LEGALES.jpg')}}')">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure  class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/PZAS.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Piezas de Pollo', '{{url('/img/cupones-1/uno/new/PZAS.png')}}', 'KFC' ,'{{url('terminos/ph/2 pzas mayo LEGALES.jpg')}}')">Descargar cupón</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/REFRESCOS.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Refrescos medianos', '{{url('/img/cupones-1/uno/new/REFRESCOS.png')}}', 'KFC' ,'{{url('terminos/ph/2 refrescos mayo LEGALES.jpg')}}')">Descargar cupón</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cupon-2">
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
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('6 Piezas de Pollo', '{{url('/img/cupones-1/dos/1.png')}}', 'KFC' ,'{{url('terminos/ph/6 pzas mayo LEGALES.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/2-1.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('8 Piezas de Pollo', '{{url('/img/cupones-1/dos/2-1.png')}}', 'KFC' ,'{{url('terminos/ph/8 pzas mayo LEGALES.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Arma tu paquete Mediano', '{{url('/img/cupones-1/dos/3.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Arma tu paquete Grande', '{{url('/img/cupones-1/dos/4.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Hut Cheese Mediana', '{{url('/img/cupones-1/dos/new/1.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Tu combinación perfecta', '{{url('/img/cupones-1/dos/new/2.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('30% de descuento hut cheese mediana', '{{url('/img/cupones-1/dos/new/3.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/dos/new/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Los mejores sabores para todos los gustos', '{{url('/img/cupones-1/dos/new/4.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
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
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Family King $215', '{{url('/img/cupones-1/tres/1.png')}}', 'Burger King' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Elige y Arma tus 2 combos con king de pollo y/o Whopper sin queso', '{{url('/img/cupones-1/tres/2.png')}}', 'Burger King' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Gran Hut Mix', '{{url('/img/cupones-1/tres/3.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Piezas de pollo', '{{url('/img/cupones-1/tres/4.png')}}', 'KFC' ,'{{url('terminos/ph/10 pzas mayo LEGALES.jpg')}}')">Descargar cupón</button>
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