@extends('layouts.nicxa')
@push('title')
¡Cupones Burger King, Pizza Hut, KFC & Los Bisquets Obregón!
@endpush
@section('content')

<section class="franquicia">
    <div class="container">
        <h1><span class="franquicia__nicxa">NICXA</span> FRANQUICIA</h1>
        <div class="franquicia__logos">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure>
                        <img src="{{asset('/img/logos/burger-logo.svg')}}" width="90" alt="">
                        <!-- <a href="https://www.gruponicxa.com.mx/promociones-nicxa/"><img src="{{asset('/img/logos/burger-logo.svg')}}" width="90" alt=""></a> -->
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 m-auto">
                    <figure>
                        <img src="{{asset('/img/logos/KFC.svg')}}" width="90" alt="">
                        <!-- <a href="https://www.gruponicxa.com.mx/promociones-nicxa/">
                            <img src="{{asset('/img/logos/KFC.svg')}}" width="90" alt="">
                        </a> -->
                    </figure>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <figure>
                        <img src="{{asset('/img/logos/PHUT.svg')}}" width="90" alt="">
                        <!-- <a href="https://www.gruponicxa.com.mx/promociones-nicxa/">
                            <img src="{{asset('/img/logos/PHUT.svg')}}" width="90" alt="">
                        </a> -->
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
                        <input type="text" class="mb-3 input_bg form-control" name="nombre" placeholder="Ingresa tu nombre" required />

                        <!--
                            <label for="apellido">Apellido</label>
                            <input type="text" class="mb-3 input_bg form-control" name="apellido" placeholder="Ingresa tu apellido" />
                        -->
                        <label for="telefono" style="color: #000">Teléfono</label>
                        <input type="tel" class="mb-3 input_bg form-control" name="telefono" placeholder="Ingresa tu numero de teléfono" required />
                        <label for="estado" style="color:#000">Estado</label>
                        {{-- Select con todos los estados de México --}}
                        <select class="mb-3 input_bg form-control" name="estado" id="estado" required>
                            {{-- options todos los estados de mexico --}}
                            <option value="" disabled selected>Selecciona un estado</option>
                            {{-- <option value="aguas calientes">Aguas Calientes</option>
                            <option value="baja california">Baja California</option>
                            <option value="baja california sur">Baja California Sur</option> --}}
                            <option value="campeche">Campeche</option>
                            {{-- <option value="coahuila de Zaragoza">Coahuila de Zaragoza</option>
                            <option value="colima">Colima</option> --}}
                            <option value="chiapas">Chiapas</option>
                            {{-- <option value="chihuahua">Chihuahua</option>
                            <option value="cdmx">Ciudad de México</option>
                            <option value="durango">Durango</option>
                            <option value="guanajuato">Guanajuato</option>
                            <option value="guerrero">Guerrero</option>
                            <option value="hidalgo">Hidalgo</option>
                            <option value="jalisco">Jalisco</option>
                            <option value="michoacan">Michoacán</option>
                            <option value="morelos">Morelos</option>
                            <option value="nayarit">Nayarit</option>
                            <option value="nuevo leon">Nuevo León</option>
                            <option value="oaxaca">Oaxaca</option>
                            <option value="puebla">Puebla</option>
                            <option value="queretaro">Querétaro</option>
                            <option value="quintana roo">Quintana Roo</option>
                            <option value="san luis potosi">San Luis Potosí</option>
                            <option value="sinaloa">Sinaloa</option>
                            <option value="sonora">Sonora</option> --}}
                            <option value="tabasco">Tabasco</option>
                            {{-- <option value="tamaulipas">Tamaulipas</option>
                            <option value="tlaxcala">Tlaxcala</option>
                            <option value="veracruz">Veracruz</option> --}}
                            <option value="yucatan">Yucatán</option>
                            {{-- <option value="zacatecas">Zacatecas</option> --}}
                        </select>
                        <label for="email" style="color: #000">Correo</label>
                        <input type="email" class="mb-3 input_bg form-control" name="correo" placeholder="Ingresa tu correo" required />

                        <?php
                        if (isset($_GET['utm_source'])) {
                            $utm_source = $_GET['utm_source'];

                            if ($utm_source == 'facebook') {
                                $utm_source = 'Facebook';
                            } elseif ($utm_source == 'google') {
                                $utm_source = 'Google';
                            } elseif ($utm_source == 'sms') {
                                $utm_source = 'SMS';
                            }
                            echo ('
                            <input type="hidden" name="utm_souce" value="' . $utm_source . '"/>');
                        } else {
                            echo ('
                            <input type="hidden" name="utm_souce" value="landing"/>');
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
        <h2 class="text-center pt-3 pb-2">¿Qué se te antoja hoy?</h2>
        <div class="text-center">
            <div class="col-12 text-center">
                <h3 style="color: #2f3235;">¿SOLO ES MEJOR QUE ACOMPAÑADO?</h3>
            </div>
        </div>
    </div>
    {{-- Segunda fila --}}
    <div class="container-fluid pb-4">
        <div class="row ordena-ahora__espacio">
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/nov/1/bk3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('King box 99', '{{url('/img/cupones-1/nov/1/bk3.png')}}', 'Burger King' ,'{{url('/img/cupones-1/nov/1/bk3.png')}}')">Descargar cupón</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/nov/1/bk4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/1/bk4.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/1/bk4.png')}}')">Descargar cupón</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/nov/1/kfc3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/1/kfc3.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/1/kfc3.png')}}')">Descargar cupón</button>
                </div>
            </div>
            <div class="col-lg col-md-6 col-sm-6">
                <figure class="ordena-ahora__cupon">
                    <img src="{{asset('/img/cupones-1/nov/1/ph4.png')}}" class="img-fluid" alt="cuponera Nicxa">
                </figure>
                <div class="text-center">
                    <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/1/ph4.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/1/ph4.png')}}')">Descargar cupón</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cupon-2">
        <div class="container-fluid">
            <div class="text-center">
                <div class="col-12 text-center pt-5 ">
                    <h3 style="color: #fff;">¿EN PAREJA?</h3>
                </div>
                <div class="row ordena-ahora__espacio">


                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/2/bk2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/2/bk2.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/2/bk2.png')}}')">Descargar cupón</button>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/2/ph2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/2/ph2.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/2/ph2.png')}}')">Descargar cupón</button>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/2/ph3.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/2/ph3.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/2/ph3.png')}}')">Descargar cupón</button>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/2/bk2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/2/bk2.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/2/bk2.png')}}')">Descargar cupón</button>
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
                    <h3 style="color: #2f3235;">¿CONVIVENCIA FAMILIAR?</h3>
                </div>
                <div class="row ordena-ahora__espacio">
                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/3/kfc1.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/3/kfc1.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/3/kfc1.png')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/3/kfc2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/3/kfc2.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/3/kfc2.png')}}')">Descargar cupón</button>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6 m-auto">
                        <figure class="ordena-ahora__cupon">
                            <img src="{{asset('/img/cupones-1/nov/3/ph1.png')}}" class="img-fluid" alt="cuponera Nicxa">
                        </figure>
                        <div class="text-center">
                            <button class="btn btn-dark btn-block" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/3/ph1.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/3/ph1.png')}}')">Descargar cupón</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-cupon-3">
        <div class="container-fluid">
            <div class="text-center">
                <div class="col-12 text-center pt-5">
                    <h3 style="color: #FFF;">PARA CERRAR, ¿UN POSTRECITO? ¿POR QUÉ NO?</h3>
                </div>
                <div class="row ordena-ahora__espacio">
                    {{-- <div class="col-lg col-md-6 col-sm-6">
                        <figure  >
                            <img src="{{asset('/img/nico/nico-2.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>

                </div> --}}
                <div class="col-lg col-md-6 col-sm-6 m-auto">
                    <figure class="ordena-ahora__cupon">
                        <img src="{{asset('/img/cupones-1/nov/4/bk1.png')}}" class="img-fluid" alt="cuponera Nicxa">
                    </figure>
                    <div class="text-center">
                        <button class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Duble Kruncher x 109', '{{url('/img/cupones-1/nov/4/bk1.png')}}', 'KFC' ,'{{url('/img/cupones-1/nov/4/bk1.png')}}')">Descargar cupón</button>
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
                                    <!--  <a href="https://globalreports.info/wolop/BurgerKingMX1/1" target="_blank" class="pizza-hutp pr-3">
                                        <i class="fa-solid fa-motorcycle"></i>
                                        Delivery
                                    </a> -->
                                    <a href="https://www.burgerking.com.mx" target="_blank" class="pizza-hut pr-3">
                                        <i class="fa-solid fa-globe"></i>
                                        burgerking.com.mx
                                    </a> <br class="d-block d-sm-block d-md-none d-lg-none">
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
                                    </a><br class="d-block d-sm-block d-md-none d-lg-none">
                                    <span class="pizza-hutp pr-2">
                                        <i class="fa-solid fa-rocket"></i>
                                        Pide por la app
                                        <a href="https://apps.apple.com/mx/app/kfc-méxico/id1539188123" class="pl-2 pr-2" target="_blank"><i class="fa-brands fa-apple"></i></a>
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
                                    </a><br class="d-block d-sm-block d-md-none d-lg-none">
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
            </div>
        </div>
    </div>
</section>
@push ('scripts')
<script>
    $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>
@endpush
@endsection
