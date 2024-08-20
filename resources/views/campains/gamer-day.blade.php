@extends('layouts.nicxa')
@push('title')
    Gamer day x Pizza Hut - Grupo Nicxa
@endpush
@push('descripcion')
    <meta name="description"
        content="¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un evento especial dedicado a todos los amantes de los videojuegos! Participa en nuestro  torneo de EA Sports FC 24 y demuestra tus habilidades  en la cancha virtual.">
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('css/game-day.css') }}">
@endpush
@section('content')
    <div class="red">
        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/redblur.png') }}" class="img-fluid" alt="">
    </div>
    <div class="purple">
        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/purpleblur.png') }}" class="img-fluid"
            alt="">
    </div>
    <div class="d-none d-sm-none d-md-none d-lg-block">
        <header class="gamer-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">

                    </div>
                    <div class="col-lg-6 col-md-12 text-center gamer-titular">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo.svg') }}" width="200"
                            alt="Logotipo Gamer Day">
                        <h2 class="gotham-bold text-white pt-3"> TORNEO GAMING <br> <span class="green">LIGA FÚTBOL
                                2024</span>
                            </h3>
                            <h2 class="bg-green gotham-bold">GANA HASTA $5,000</h2>
                            <h3 class="gotham-light text-white">29 DE AGOSTO</h4>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="d-block d-sm-block d-md-block d-lg-none">
        <header class="gamer-header">
            <div class="col-lg-6 col-md-12 text-center gamer-titular">
                <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo.svg') }}" width="200"
                    alt="Logotipo Gamer Day">
                <h2 class="gotham-bold text-white pt-3"> TORNEO GAMING <br> <span class="green">LIGA FÚTBOL 2024</span>
                </h2>
                <h4 class="bg-green gotham-bold">GANA HASTA $5,000</h4>
                <h4 class="gotham-light text-white">29 DE AGOSTO</h3>
            </div>
        </header>
    </div>
    <section class="descripcion">
        <div class="container">
            <div class="d-none d-sm-none d-md-none d-lg-block">
                <div class="contenido">
                    <div class="imagen">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/soccer.webp') }}" class="img-fluid"
                            alt="">
                    </div>
                    <div class="texto-contenido">
                        <h3>¡Celebra el Gamer Day <br>
                            con Pizza Hut! </h3>
                        <hr width="5%" align="left">
                        <p class="gotham-light">¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un
                            evento
                            especial dedicado a todos los amantes de los videojuegos! Participa en nuestro torneo de EA
                            Sports
                            FC 24 y demuestra tus habilidades en la cancha virtual.

                            <br><br>
                            No pierdas la oportunidad de convertirte en el campeón del Gamer Day y llevarte a casa un
                            increíble
                            premio! ¡Te esperamos en Pizza Hut para celebrar el espíritu gamer como nunca antes!
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-block d-lg-none">
                <div class="row imagen-m">
                    <div class="col-12">
                        <div class="texto-contenido-m text-white">
                            <h3>¡Celebra el Gamer Day <br>
                                con Pizza Hut! </h3>
                            <hr width="5%" align="left" color="#fff">
                            <p class="gotham-light">¡Este 29 de agosto, únete a nosotros para el Gamer Day con Pizza Hut, un
                                evento
                                especial dedicado a todos los amantes de los videojuegos! Participa en nuestro torneo de EA
                                Sports
                                FC 24 y demuestra tus habilidades en la cancha virtual.

                                <br><br>
                                No pierdas la oportunidad de convertirte en el campeón del Gamer Day y llevarte a casa un
                                increíble
                                premio! ¡Te esperamos en Pizza Hut para celebrar el espíritu gamer como nunca antes!
                            </p>
                        </div>
                        <div class="imagen-soccer col-12 text-center">
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/soccer2.webp') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="premios">
        <div class="container">
            <div class="text-center">
                <h2 class="gotham-bold text-white">PREMIOS</h2>
            </div>
            <div class="lugares-premios">
                <div class="row espacio_premios_uno">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <h1 class="gotham-bold">$5,000</h1>
                        <p class="gotham-bold text-white">Primer Lugar</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <h1 class="gotham-bold">$4,000</h1>
                        <p class="gotham-bold text-white">Segundo Lugar</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                        <h1 class="gotham-bold">$3,000</h1>
                        <p class="gotham-bold text-white">Tercer Lugar</p>
                    </div>
                </div>
                <div class="row espacio_premios mt-4">
                    <div class="col-lg-4  text-center">
                        <h1 class="gotham-bold">$2,000</h1>
                        <p class="gotham-bold text-white">Cuarto Lugar</p>
                    </div>
                    <div class="col-lg-4  text-center">
                        <h1 class="gotham-bold">$1,000</h1>
                        <p class="gotham-bold text-white">Quinto Lugar</p>
                    </div>
                    <div class="col-lg-4  text-center">
                        <h1 class="gotham-bold">$500</h1>
                        <p class="gotham-bold text-white">Sexto Lugar</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sucursales">
        <div class="container">
            <h2 class="text-center gotham-bold text-white">ESCOGE TU SUCURSAL</h2>
            <div class="sucursal">
                <div class="row ">
                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="img-sucursal text-right">
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/oriente.webp') }}"
                                class="img-fluid contenido_sucursal" alt="Pizza Hut Sucursal oriente Mérida">
                        </div>
                        <div class="detalles">
                            <span class="gotham-bold">Pizza Hut Oriente</span> <span class="gotham-bold">04:00 P.M.</span>
                        </div>
                        <small class="text-white">Mérida</small>
                        <div class="botones pt-3">
                            <div class="d-none d-sm-none d-md-block d-lg-block">
                                <a href="https://forms.gle/HdTK4ZWNNFrVAeTF9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/bmxXrrNWpTuPtfcd9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                            </div>
                            <div class="d-block d-sm-block d-md-none d-lg-none">
                                <a href="https://forms.gle/HdTK4ZWNNFrVAeTF9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/bmxXrrNWpTuPtfcd9" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5">
                        <div class="img-sucursal text-right">
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/portillo.webp') }}"
                                class="img-fluid contenido_sucursal" alt="Pizza Hut Sucursal oriente Mérida">
                        </div>
                        <div class="detalles">
                            <span class="gotham-bold">Pizza Hut Portillo</span> <span class="gotham-bold">04:00
                                P.M.</span>
                        </div>
                        <small class="text-white">Mérida</small>
                        <div class="botones pt-3">
                            <div class="d-none d-sm-none d-md-block d-lg-block">
                                <a href="https://www.start.gg/tournament/liga-hut-gaming-by-pizza-hut-fc-24/details"
                                    target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/8SSosJRpT9Z27V7v7" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="180" alt="boton inscripcion">
                                </a>
                            </div>
                            <div class="d-block d-sm-block d-md-none d-lg-none">
                                <a href="https://www.start.gg/tournament/liga-hut-gaming-by-pizza-hut-fc-24/details"
                                    target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-inscripcion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                                <a href="https://maps.app.goo.gl/8SSosJRpT9Z27V7v7" target="blank">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/btn-ubicacion.svg') }}"
                                        width="160" alt="boton inscripcion">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cuenta">
        <div class="container">
            <div class="fondo">
                <div class="row contenido-cuenta">

                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto ">
                        <h1 class="gotham-bold text-white">Torneo Gaming 2024</h1>
                        <hr width="5%" align="left" color="#fff">
                        <p class="text-white gotham-light">Cuenta regresiva</p>
                        <div class="fecha-fin">
                            <div id="cuenta">

                                <div class="estrella1">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/Star8.svg') }}"
                                        width="20" alt="Estrella">
                                </div>
                                <div class="estrella2">
                                    <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/Star8.svg') }}"
                                        width="20" alt="Estrella">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/gamers.webp') }}"
                            class="img-fluid" alt="Gamers">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="prefooter">
        <div class="container">
            <div class="row text-center">
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/logo-pizzahut.svg') }}"
                            width="220" alt="">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div>
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/pizzahutmovil.svg') }}"
                                width="70" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div>
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/uber-eats.svg') }}"
                                width="120" alt="">
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div>
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/uber-eats.svg') }}"
                                width="70" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/pcgamers.png') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div>
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/pcgamers.png') }}"
                                width="90" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto">
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <div>
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/e-stom.svg') }}"
                                width="90" alt="">
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <div>
                            <img src="{{ asset('img/gestion2024/campains/pizzahut/gamer-day/e-stom.svg') }}"
                                width="60" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="restricciones-power">
        <div class="container">
            <div class="text-left pt-5 pb-5">
                <li style="padding: 0; list-style: none;"><b>TÉRMINOS Y CONDICIONES</b><br><br>Bases para participar
                <li>El torneo Liga Hut Gaming by Pizza Hut sólo es válido para personas físicas que sean residentes de los
                    estados de Quintana Roo y Yucatán.
                </li>
                <li>El concurso es individual y solo se premiará a las personas ganadoras que se hayan registrado en el
                    portal correspondiente a su ciudad y que hayan logrado las metas establecidas por los organizadores de
                    este torneo. (E-stom y/o Pc Gamers Cancun) </li>
                <li>Torneo solo valido para mayores de edad. </li>
                <li>Pizza Hut no se hace responsable de las mecánicas realizadas por el organizador del torneo.</li>
                <li>Este evento está organizado en conjunto con Pc Gamers Cancun “ADRIAN MORENO CARDONA” y E-stom “GRUPO
                    ICOCO SA DE CV”.</li>
                </li>
                <li style="padding: 0; list-style: none;"><b>Mecanismo de Participación:</b>
                    <ol>
                        <li>Registrarse en el portal correspondiente a tu ciudad.
                            Mérida: <a href="https://forms.gle/rH3tG2uG4etzsmdF8"
                                style="color: red">https://forms.gle/rH3tG2uG4etzsmdF8</a>. Cancún: <a
                                href="https://www.start.gg/tournament/liga-hut-gaming-by-pizza-hut-fc-24/details"
                                style="color: red">https://www.start.gg/tournament/liga-hut-gaming-by-pizza-hut-fc-24/details</a>
                        </li>
                        <li>Concursar físicamente el día del evento (29 de agosto).</li>
                        <li>Si la persona no está previamente registrado en el portal, no podrá concursar en el torneo del
                            29 de agosto</li>
                        <li>Lograr los objetivos que establezcan los organizadores el 29 de agosto en el juego de FC2024.
                        </li>
                    </ol>
                </li>
                <li style="padding: 0; list-style: none;"><b>Periodo de Participación:</b>
                <li>Duración del torneo de 5 a 6 horas máximo.</li>
                <li>Inscripción gratuita con cupo limitado para participar de 50 personas.</li>
                <li>Registro considerado: Del 15 al 24 de agosto 22024 o hasta lograr el cupo máximo de registros.</li>
                <li>El torneo se realizará el jueves 29 de agosto de 2024 iniciando a las 16:00 hrs en las sucursales Pizza
                    Hut Portillo en Cancún, quintana Roo y sucursal Pizza Hut Oriente en Mérida Yucatán. </li>

                </li>
                <li style="padding: 0; list-style: none;"><b>Fechas Importantes:</b>
                <li>1° lugar: $5,000 en efectivo.</li>
                <li>2° lugar: $4,000 en efectivo.</li>
                <li>3° lugar: $3,000 en efectivo.</li>
                <li>4° lugar: $2,000 en efectivo.</li>
                <li>5° lugar: $1,000 en efectivo.</li>
                <li>6° lugar: $500 en efectivo.</li>
                </li>
                <li style="padding: 0; list-style: none;"><b>Entrega de premios:</b>
                <li>Los ganadores se darán en conocer el ganador al finalizar el torneo a través de los organizadores PC
                    Gamer Cancun y E-stom Mérida.</li>
                <li>Los premios se entregarán el viernes 30 de agosto en:
                    Mérida: Directamente en las oficinas de grupo Nicxa (Calle 59 #253 Por 32 y, C. 32, San Ramón Nte, 97117
                    Mérida, Yuc.) en un horario de 9 a 15hrs.
                    <br>
                </li>
                Cancún: Los premios se entregarán en sucursal Pizza hut Portillo (Av. José López Portillo Supermanzana 98
                Manzana 51, 77537 Cancún, Q.R.) en un horario de 9 a 15hrs.
                </li>
                <li>Los ganadores tendrán que mostrar su identificación oficial y firmar una hoja donde acepten recibir el
                    premio en efectivo.</li>
                <li style="padding: 0; list-style: none;"><b>Derechos de Uso de Imagen:</b>
                <li>Al participar en el concurso, los participantes otorgan a Operadora de Franquicias AGN SA de CV y
                    Operadora Nicxa SA de CV su consentimiento para utilizar, reproducir, distribuir, modificar, adaptar, y
                    exhibir públicamente videos, nombre, imagen en cualquier medio, incluyendo, pero no limitado a, redes
                    sociales, sitios web, materiales de marketing y publicidad, sin necesidad de obtener consentimiento
                    adicional o solicitar compensación económica.</li>
                <li style="padding: 0; list-style: none;"><b>Mecánica de Selección del Ganador:</b>
                <li>La mecánica para el torneo será establecida de acuerdo a los lineamentos establecidos por los organizadores (E-stom para el torneo de Mérida, Yucatán y Pc Gamers Cancún en Cancún, Quintana Roo).</li>
                <br>
                <p>©2024 Grupo Nicxa®. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('js/contador.min.js') }}"></script>
        <script src="{{ asset('js/contconfig.js') }}"></script>
    @endpush
@endsection
