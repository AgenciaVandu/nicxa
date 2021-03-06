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
                        <label for="telefono" style="color: #000">Tel??fono</label>
                        <input type="tel" class="mb-3 input_bg form-control" name="telefono" placeholder="Ingresa tu numero de tel??fono" />

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
                                Al registrarte aceptas los terminos y condiciones de la promoci??n seleccionada.
                                Haz click <a id="terminos" class="terminos" href="#" target="_blank">aqu??</a> para verlos.
                                <br>
                                <a class="footer-a-b" href="{{url('Aviso de Privacidad.pdf')}}">Politicas de privacidad</a>
    
                            </p>
                            <img class="marcas" src="{{url('/img/marcas.svg')}}" width="300" alt="" srcset="">
                        </span>
                    </div>
                </form>
                <img src="{{url('assets/form_banner_burgerking.png')}}" class="img-form" width="400px" height="auto" alt="" srcset="">
            </div>
        </div>
    </div>
</div>
<section class="cupones-nicxa">
    <div class="container-fluid pb-4">
        <h2 class="text-center pt-3 pb-2">??Qu?? se te antoja hoy?</h2>
        <div class="text-center">
            <div class="col-12 text-center">
                <h3 style="color: #2f3235;">??SOLO ES MEJOR QUE ACOMPA??ADO?</h3>
            </div>
            {{-- Primera Fila --}}
            <div class="row ordena-ahora__espacio">
                <div class="col-lg col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/12-julio/1.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Nueva My Box', '{{url('/img/cupones-1/uno/12-julio/1.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/mybox.png')}}')" >Descargar cup??n</button>
                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/12-julio/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Alitas + Refresco', '{{url('/img/cupones-1/uno/12-julio/4.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/alitas.png')}}')" >Descargar cup??n</button>
                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/18-julio/lbo-9.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                    {{-- <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Bastones de Cajeta', '{{url('/img/cupones-1/uno/18-julio/lbo-9.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar-b">Descargar cup??n</button> --}}
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Bisquets gratis en tu primera compra*', '{{url('/img/cupones-1/uno/18-julio/lbo-9.png')}}', 'KFC' ,'{{url('/img/cupones-1/uno/18-julio/lbo-9.png')}}')" >Descargar cup??n</button>
                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <figure  class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/burger/combo-whopper-99.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Combo Whopper + 4 Nuggets', '{{url('/img/cupones-1/uno/new/burger/combo-whopper-99.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/combowhopper.jpg')}}')">Descargar cup??n</button>
                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/burger/10-nuggets-papas.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">{{-- modificar --}}
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Nuggets + papas grandes', '{{url('/img/cupones-1/uno/new/burger/10-nuggets-papas.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/10nuggets.jpg')}}')">Descargar cup??n</button>
                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/uno/new/burger/2-papas-medianas-39.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">{{-- modificar --}}
                        <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Papas medianas x 39', '{{url('/img/cupones-1/uno/new/burger/2-papas-medianas-39.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/2papasmedianas.jpg')}}')">Descargar cup??n</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Segunda fila --}}
    <div class="container-fluid pb-4">
        <div class="row ordena-ahora__espacio">
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/uno/12-julio/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Boneless + refresco', '{{url('/img/cupones-1/uno/12-julio/2.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/boneless.png')}}')" >Descargar cup??n</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('4 Bisquets Originales', '{{url('/img/cupones-1/uno/18-julio/kfc-1.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-3.jpg')}}')">Descargar cup??n</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('3 ke-tiras', '{{url('/img/cupones-1/uno/18-julio/kfc-4.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-5.jpg')}}')">Descargar cup??n</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure  class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Piezas de Pollo', '{{url('/img/cupones-1/uno/18-julio/kfc-3.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-6.jpg')}}')">Descargar cup??n</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Refrescos medianos', '{{url('/img/cupones-1/uno/18-julio/kfc-2.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-1.jpg')}}')">Descargar cup??n</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/uno/new/burger/2-conos-14.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Conos Sencillos', '{{url('/img/cupones-1/uno/new/burger/2-conos-14.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/2conos-sencillos.jpg')}}')">Descargar cup??n</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cupon-2">
        <div class="container-fluid">
            <div class="text-center">
                <div class="col-12 text-center pt-5 ">
                    <h3 style="color: #fff;">??VISITA SORPRESA?</h3>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-5.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Big Krunch', '{{url('/img/cupones-1/uno/18-julio/kfc-5.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-4.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div> 
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-6.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('8 Piezas de Pollo', '{{url('/img/cupones-1/uno/18-julio/kfc-6.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-9.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/5.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Hut Cheese Mediana', '{{url('/img/cupones-1/uno/12-julio/5.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/hutcheese-m.png')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/6.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Pizza Mediana + 1 Complemento', '{{url('/img/cupones-1/uno/12-julio/6.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/pizza-m-complemento.png')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/new/burger/2-hamburgesas-con-queso.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Hamburguesas con Queso', '{{url('/img/cupones-1/uno/new/burger/2-hamburgesas-con-queso.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/2hamburguesas-con-queso.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/7.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Pizza Grande Tradicional Lovers', '{{url('/img/cupones-1/uno/12-julio/7.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/pizza-lovers.png')}}')">Descargar cup??n</button>
                        </div>
                    </div> 
                   <!--  <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/8.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Pizza de Sart??n', '{{url('/img/cupones-1/uno/12-julio/8.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/pizza-m-sarten.png')}}')">Descargar cup??n</button>
                        </div>
                    </div> -->
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/9.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Arma tu Paquete Grande', '{{url('/img/cupones-1/uno/12-julio/9.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/pizza-tradicional.png')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/10.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Pizza Crispy', '{{url('/img/cupones-1/uno/12-julio/10.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/pizza-crispy.png')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-7.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Piezas de Pollo', '{{url('/img/cupones-1/uno/18-julio/kfc-7.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-8.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/18-julio/ph-sarten.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Pizza de sart??n mediana', '{{url('/img/cupones-1/uno/18-julio/ph-sarten.png')}}', 'Pizza Hut' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-10.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div> 
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/18-julio/just4-2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Just For 2', '{{url('/img/cupones-1/uno/18-julio/just4-2.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-11.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cupon-1">
        <div class="container-fluid">
            <div class="text-center">
                <div class="col-12 text-center pt-5">
                    <h3 style="color: #2f3235;">??CONVIVENCIA FAMILIAR?</h3>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/new/burger/elige-y-arma-159.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center" style="margin-top: 20px;">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Elige y arma $159', '{{url('/img/cupones-1/uno/new/burger/elige-y-arma-159.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/eligeyarma.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/new/burger/family-king-219.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center" style="margin-top: 20px;">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Family King $219', '{{url('/img/cupones-1/uno/new/burger/family-king-219.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/bk/familyking.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/11.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Triple Box', '{{url('/img/cupones-1/uno/12-julio/11.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/triple-box.png')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/12-julio/12.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Gran Hut Mix', '{{url('/img/cupones-1/uno/12-julio/12.png')}}', 'Burger King' ,'{{url('/img/cupones-1/terminos-franquicia/12-julio/gran-hut-mix.png')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/uno/18-julio/kfc-8.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('15 Piezas de Pollo', '{{url('/img/cupones-1/uno/18-julio/kfc-8.png')}}', 'KFC' ,'{{url('/img/cupones-1/terminos-franquicia/18-julio/legales-7.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="row ordena-ahora__espacio">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/1.png')}}" class="img-fluid" alt="Cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Family King $215', '{{url('/img/cupones-1/tres/1.png')}}', 'Burger King' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Elige y Arma tus 2 combos con king de pollo y/o Whopper sin queso', '{{url('/img/cupones-1/tres/2.png')}}', 'Burger King' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Gran Hut Mix', '{{url('/img/cupones-1/tres/3.png')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/tres/4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Piezas de pollo', '{{url('/img/cupones-1/tres/4.png')}}', 'KFC' ,'{{url('terminos/ph/10 pzas mayo LEGALES.jpg')}}')">Descargar cup??n</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<section class="ordena-ahora pb-5">
    <div class="container">
        <div class="col-lg-12">
            <div class="text-center pt-5 pb-2">
                <h1>??Ordena <span class="franquicia__nicxa">Ahora!</span></h1>
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
                                    <span class="pizza-hutp pr-2">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app 
                                        <a href="https://apps.apple.com/mx/app/burger-king-mexico/id1457228152" class="pl-2 pr-2" target="_blank"><i class="fa-brands fa-apple"></i></a> 
                                        <a href="https://play.google.com/store/apps/details?id=com.nosmk.burgerking&hl=es_MX&gl=US" class="pr-2" target="_blank"><i class="fa-brands fa-android"></i></a>
                                    </span> <br class="d-block d-sm-block-d-md-none d-lg-none">
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
                                    <a href="https://kfc.com.mx/" target="_blank" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-globe"></i>
                                        kfc.com.mx
                                    </a>
                                    <span class="pizza-hutp pr-2">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app 
                                        <a href="https://apps.apple.com/mx/app/kfc-m??xico/id1539188123" class="pl-2 pr-2" target="_blank"><i class="fa-brands fa-apple"></i></a> 
                                        <a href="https://play.google.com/store/apps/details?id=com.kfc.mexico&hl=es_MX&gl=US" class="pr-2" target="_blank"><i class="fa-brands fa-android"></i></a>
                                    </span> <br class="d-block d-sm-block-d-md-none d-lg-none">
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
                                    <a href="https://www.pizzahut.com.mx/home" target="_blank" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-globe"></i>
                                        pizzahut.com.mx
                                    </a>
                                    <span class="pizza-hutp pr-2">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app 
                                        <a href="https://apps.apple.com/es/app/pizza-hut-delivery/id1469870172?platform=iphone" class="pl-2 pr-2" target="_blank"><i class="fa-brands fa-apple"></i></a> 
                                        <a href="https://play.google.com/store/apps/details?id=com.kfc.mexico&hl=es_MX&gl=US" class="pr-2" target="_blank"><i class="fa-brands fa-android"></i></a>
                                    </span> <br class="d-block d-sm-block-d-md-none d-lg-none">
                                    <a href="tel:999153737" class="pizza-hut">
                                        <i class="fa-solid fa-headset"></i>
                                        9995 15 3737
                                    </a>
                                </div>
                            </div>
                        </li>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
                    <h4>Los Bisquets Obreg??n</h5>
                        <li class="ordena-ahora__opciones">
                            <div class="row">
                                <div class="col-12">
                                    <a href="tel:9999480578" class="pizza-hut">
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