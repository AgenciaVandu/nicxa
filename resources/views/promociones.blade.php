@include('app.header')

<body>

    @include('app.nav')

    <!-- SLIDER -->
    <div id="carouselExampleSlidesOnly" class="carousel slide slider" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-slider" src="{{url('banner_nicxa_bg.png')}}" alt="First slide">
            </div>
        </div>
    </div>

    <!-- CUPONES SECCION UNO -->
    <div class="seccion-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kfc-title">
                        <h1>¿Solo es mejor que acompañado? <br>
                            <span class="variant-title">¡Pásala bien!</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-3" id="my_box">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/pz_my_box.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('My Box', '{{url('assets/ph_cupones_new/pz_my_box.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
                <div class=" col-md-3" id="2_papas_medianas">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/2_papas_medianas.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Papas medianas','{{url('assets/bk_cupones_new/2_papas_medianas.jpg')}}', 'Burgerking','{{url('terminos/bk_legales/2_papas_medianas.jpg')}}')" class="button-descargar">Descargar cupón</button>
                </div>
                <div class=" col-md-3" id="combo_whopper">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/combo_whopper.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Combo Whopper', '{{url('assets/bk_cupones_new/combo_whopper.jpg')}}', 'Burgerking' ,'{{url('terminos/bk_legales/combo_whopper.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
                <div class=" col-md-3" id="diez_nuggets">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/10_nuggets.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Nuggets + Papas grandes', '{{url('assets/bk_cupones_new/10_nuggets.jpg')}}', 'Burgerking' ,'{{url('legales/10 nuggets.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CUPONES SECCION DOS -->
    <div class="seccion-content-b">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kfc-title">
                        <h1>¿Visita sorpresa?<br>
                            <span class="variant-title-b">¡No te preocupes!</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" id="2_hamburguesas">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/2_hamburgesas.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 hamburguesas', '{{url('assets/bk_cupones_new/2_hamburgesas.jpg')}}', 'Burgerking' ,'{{url('terminos/bk_legales/2_hamburguesas.jpg')}}' )" class="button-descargar-b">Descargar cupón</button>
                </div>


                <div class="col-md-4" id="3_ketiras">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/3_ketiras.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button class="button-descargar-b" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('3 Ketiras','{{url('assets/kfc_cupones_new/3_ketiras.jpg')}}', 'KFC','{{url('terminos/kfc_legales/ketiras.jpg')}}')">Descargar Cupón</button>
                </div>

                <div class="col-md-4" id="2_pz_pollo">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/2_piezas.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Piezas de pollo','{{url('assets/kfc_cupones_new/2_piezas.jpg')}}', 'KFC','{{url('terminos/kfc_legales/2_piezas.jpg')}}')" class="button-descargar-b">Descargar Cupón</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" id="2_refrescos_medianos">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/2_refrescos.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Refrescos Medianos','{{url('assets/kfc_cupones_new/2_refrescos.jpg')}}', 'KFC','{{url('terminos/kfc_legales/2_refrescos.jpg')}}')" class="button-descargar-b">Descargar cupón</button>
                </div>


                <div class="col-md-4" id="6_pz_pollo">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/6_piezas.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('6 Piezas de pollo','{{url('assets/kfc_cupones_new/6_piezas.jpg')}}', 'KFC','{{url('terminos/kfc_legales/6_piezas.jpg')}}')" class="button-descargar-b">Descargar Cupón</button>
                </div>


                <div class="col-md-4" id="kruncher">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/kruncher.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Kruncher', '{{url('assets/kfc_cupones_new/kruncher.jpg')}}', 'KFC','{{url('terminos/kfc_legales/kruncher.jpg')}}' )" class="button-descargar-b">Descargar cupón</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" id="arma_tu_paquete">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/pz_arma_tu_paquete.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Arma tu paquete', '{{url('assets/ph_cupones_new/pz_arma_tu_paquete.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar-b">Descargar cupón</button>
                </div>
                <div class="col-md-4" id="hut_cheese">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/hut_cheese.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Hut Cheese', '{{url('assets/ph_cupones_new/hut_cheese.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar-b">Descargar cupón</button>
                </div>
                <div class="col-md-4" id="paquete_mediano">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/pz_paquete_mediano.jpg')}}" width="300px" height="auto" alt="" srcset="" />
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Paquete Mediano', '{{url('assets/ph_cupones_new/pz_paquete_mediano.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar-b">Descargar cupón</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CUPONES SECCION TRES-->
    <div class="seccion-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kfc-title">
                        <h1>¿Convivencia familiar? <br>
                            <span class="variant-title">¡No te quedes atrás! </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3" id="elige_arma">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/elije_arma.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Elige y Arma', '{{url('assets/bk_cupones_new/elije_arma.jpg')}}', 'Burgerking' ,'{{url('terminos/bk_legales/elige.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
                <div class="col-md-3" id="family_king">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/family_king.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Family King', '{{url('assets/bk_cupones_new/family_king.jpg')}}', 'Burgerking' ,'{{url('terminos/bk_legales/family_king.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
                <div class="col-md-3" id="8_pz_pollo">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/8_piezas.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('8 Piezas de pollo','{{url('assets/kfc_cupones_new/8_piezas.jpg')}}', 'KFC','{{url('terminos/kfc_legales/8_piezas.jpg')}}')" class="button-descargar">Descargar cupón</button>
                </div>
                <div class="col-md-3" id="10_pz_pollo">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/10_piezas.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button class="button-descargar" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('10 Piezas','{{url('assets/kfc_cupones_new/10_piezas.jpg')}}', 'KFC','{{url('terminos/kfc_legales/10_piezas.jpg')}}')">Descargar Cupón</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/mejores_sabores.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Los mejores sabores', '{{url('assets/ph_cupones_new/mejores_sabores.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
                <div class="col-md-4">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/30_descuento.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('30% de descuento', '{{url('assets/ph_cupones_new/30_descuento.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}' )" class="button-descargar">Descargar cupón</button>
                </div>
                <div class="col-md-4" id="combinacion_perfecta">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/combinacion_perfecta.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Gran Hut Mix', '{{url('assets/ph_cupones_new/combinacion_perfecta.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar">Descargar cupón</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CUPONES SECCION CUATRO -->
    <div class="seccion-content-b">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kfc-title">
                        <h1>¿Antojo de un<span class="variant-title-b"> postre?</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" id="2 Conos X $14">
                    <img class="cupones" src="{{url('assets/bk_cupones_new/2_conos.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('2 Conos X $14', '{{url('assets/bk_cupones_new/2_conos.jpg')}}', 'Burgerking' ,'{{url('terminos/bk_legales/2_conos.jpg')}}' )" class="button-descargar-b">Descargar cupón</button>
                </div>
                <div class="col-md-4" id="4_bisquets">
                    <img class="cupones" src="{{url('assets/kfc_cupones_new/4_bisquets.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button class="button-descargar-b" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('4 Bisquets','{{url('assets/kfc_cupones_new/4_bisquets.jpg')}}', 'KFC','{{url('terminos/kfc_legales/4_bisquets.jpg')}}')">Descargar Cupón</button>
                </div>
                <div class="col-md-4" id="bastones_de_cajeta">
                    <img class="cupones" src="{{url('assets/ph_cupones_new/pz_bastones_cajeta.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Bastones de Cajeta', '{{url('assets/ph_cupones_new/pz_bastones_cajeta.jpg')}}', 'Pizza Hut' ,'{{url('terminos/ph/LEGALES CUPONES PH.jpg')}}')" class="button-descargar-b">Descargar cupón</button>
                </div>
                
            </div>
        </div>
    </div>

    <!-- CUPONES SECCION CINCO 
    <div class="seccion-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kfc-title">
                        <h1>¿Reflexionando de la vida!<br>
                            <span class="variant-title-c">¡Hazlo con la mejor compañía!</span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" id="cupon_digital_lbbo">
                    <img class="cupones" src="{{url('assets/lbbo_cupones/Cupon_Digital_LBO.jpg')}}" width="300px" height="auto" alt="" srcset="">
                    <button class="button-descargar-d" data-toggle="modal" data-target="#exampleModalLong" onclick="cupones('Cafe Americano + 1 Pan dulce', '{{url('assets/lbbo_cupones/Cupon_Digital_LBO.jpg')}}', 'LBB Obregon','{{url('terminos/lbboLEGALES LBO CUPON DIGITAL.jpg')}}')">Descargar cupón</button>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    -->



    <!-- MODAL  -->
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
                            <label for="nombre">Nombre</label>
                            <input type="text" class="mb-3 input_bg form-control" name="nombre" placeholder="Ingresa tu nombre" />

                            <!--
                                <label for="apellido">Apellido</label>
                                <input type="text" class="mb-3 input_bg form-control" name="apellido" placeholder="Ingresa tu apellido" />
                            -->
                            <label for="telefono">Teléfono</label>
                            <input type="tel" class="mb-3 input_bg form-control" name="telefono" placeholder="Ingresa tu numero de teléfono" />

                            <label for="email">Correo</label>
                            <input type="email" class="mb-3 input_bg form-control" name="correo" placeholder="Ingresa tu correo" />

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
                                <input type="hidden" name="utm_souce" value="none"/>');
                            }
                            ?>
                            <input id="campo_cupon" type="hidden" name="cupon" value="none" />
                            <input id="url_cupon" type="hidden" name="url_cupon" value="none" />
                            <input id="marca_cupon" type="hidden" name="marca" value="none" />
                            <button type="submit" class="btn-submit">
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

    <script src="{{url('app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

@include('app.footer')