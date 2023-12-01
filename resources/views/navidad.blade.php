@extends('layouts.nicxa')
@push('css')
<link rel="stylesheet" href="{{ asset('/css/navidad.css') }}">
@endpush
@section('content')


<header class="banner-premio">
    <div class="container-fluid">
        <div class="banner text-center">
            <div class="d-none d-sm-none d-md-block d-lg-block">
                <picture>
                    <img src="{{asset('/img/navidad/banner-1.png')}}" class="img-fluid" alt="Premios de santa">
                </picture>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <picture>
                    <img src="{{asset('/img/navidad/movil-banner.png')}}" class="img-fluid" alt="Premios de santa">
                </picture>
            </div>
        </div>
        <div class="conoce-mas">
            <a href="#elbuzon" class="text-center">
                <h5>Conoce más</h5>
                <img src="{{asset('/img/navidad/arrow.svg')}}" width="40" alt="Flecha">
            </a>
        </div>
    </div>
</header>
<section id="elbuzon" class="elbuzon">
    <div class="container">
        <div class="elbuzon__contenido">
            <div class="row">
                <div class="santa-salto col-md-6 col-sm-12">
                    <img src="{{asset('/img/navidad/santa.png')}}" class="santa" alt="Santa Claus">
                    <img src="{{asset ('/img/navidad/buzon.svg') }}" class="buzon" alt="Buzón de santa">
                </div>
                <div class="col-md-6 col-sm-12 texto">
                    <div class="santa">
                        <h1>El Buzón de Santa</h1>
                        <p>Burger King (Operadora EXE) presenta "El Buzón de Santa", una mágica campaña navideña que invita a los niños a escribir sus cartas y depositarlas en el Buzón de Santa. Esta iniciativa busca crear momentos especiales durante la temporada festiva, brindando a los pequeños la oportunidad de compartir sus sueños y deseos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sorteo">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1>Sobre el sorteo</h1>
                <p class="sorteo__como pt-2">
                    <span>Cómo Participar:</span><br>
                    Adquiere un King Jr en cualquiera de nuestras sucursales participantes* y recibe la carta especial para llenar con tus sueños navideños. Pero no te preocupes, en la compra de cualquier otro producto sin mínimo de compra, te entregarán una carta blanco y negro (esta no participa en el sorteo).
                </p>
            </div>
            <div class="col-md-6 col-sm-12 text-center m-auto">
                <picture><img src="{{asset('/img/navidad/ninos.png')}}" class="img-fluid" alt="Personas en navidad"></picture>
            </div>
            <div class="col-12 pt-4 sorteo__consideraciones">
                <small><span>*Mérida:</span> Centro, Aviación, Fco de Montejo, Oriente, Itzaes, Norte, Macroplaza, Plaza Sendero FC Mid, Valladolid, Tizimín, Montejo, Gran Plaza FC Mid, Plaza Dorada FC, Plaza Las Américas FC Mid, Correo Frances, Altabrisa FC Mid, Altabrisa FS Mid, Plaza Dorada 400 FS, Louvre, Caucel. <span>Cancún:</span> Malecón Américas FC Cun, Plaza Las Avenida, Lodemo, Mall, Gran Plaza FS Cun, Gran Plaza FC Mid, Constituyentes. <span>Playa del Carmen:</span> Plaza Las Américas FC Playa, Leones, Juárez, Tulum. <span>Tabasco:</span> Cinépolis, Zona Lu, Plaza Real FS Vhs, Altabrisa FC Vhs, Cárdenas, Sendero Select FC Vhs, Sendero FS Vhs. <span>Chiapas:</span> Tapachula, Santa Elena, Tuxtla Centro, San Cristóbal, Plaza Del Sol, Alaïa Tapachula, Comitán, Tonal, Galerías Tapachula, Diana Cazadora, Ámbar.</small>
            </div>
        </div>
    </div>
</section>

<section class="premios">
    <div class="container">
        <div class="premios__informacion">
            <h1>Premios</h1>
            <p>Habrá 5 afortunados ganadores, cada uno recibirá una tarjeta de regalo de Amazon por un valor de $4,000 cada una para hacer realidad esos deseos navideños.</p>
        </div>
        <picture class="premios__contenedor">
            <img src="{{asset('/img/navidad/cards.png')}}" class="premios__imagen" alt="Tarjetas amazon">
        </picture>
    </div>
</section>

<section class="ganadores">
    <div class="container">
        <h1>Selección y anuncio de ganadores</h1><br>
        <p>
            <span>Selección y anuncio de ganadores</span><br>
            Los ganadores serán seleccionados al azar y anunciados en nuestras redes sociales (Instagram: @GrupoNicxaOficial, Facebook: Grupo Nicxa, TikTok: @GrupoNicxa) el día 21 de diciembre de 2023. Además, nos pondremos en contacto con los ganadores a través de los números telefónicos proporcionados en las cartas.
            En caso de que el número telefónico no este escrito correctamente o no se obtenga respuesta del ganador en las siguientes 24 horas se otorgará el premio a otro participante seleccionado al azar.
            <br><br>

            <span>Fecha de conclusión y entrega de premios:</span><br>

            La dinámica estará vigente del 4 de diciembre hasta el 18 de diciembre de 2023 o hasta agotar existencias de las cartas en cada sucursal. El ganador se dará a conocer el 21 de diciembre en nuestras redes sociales y la entrega de premios se realizará el 22 de diciembre de 2023.
        </p>
        <div class="d-none d-sm-none d-md-block d-lg-block">
            <div class="anuncio">
                <div class="anuncio__posicion">
                    <div class="destacados">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div id="uno" class="destacado">
                                    <img src="{{asset('/img/navidad/verde.png')}}" class="img-fluid" alt="fecha de inicio sorteo">
                                </div>
                                <div class="sobre">
                                    <img src="{{asset('/img/navidad/carta.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div id="dos" class="col-md-4 col-sm-12">
                                <div class="destacado">
                                    <img src="{{asset('/img/navidad/cafe.png')}}" class="img-fluid" alt="fecha de inicio sorteo">
                                </div>
                                <div class="duende">
                                    <img src="{{asset('/img/navidad/duende.svg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div id="tres" class="col-md-4 col-sm-12">
                                <div class="destacado">
                                    <img src="{{asset('/img/navidad/rojo.png')}}" class="img-fluid" alt="fecha de inicio sorteo">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="d-block d-sm-block d-md-none d-lg-none">
            <div class="anuncio-movil">
                <div class="anuncio-movil-contenedor">
                    <div class="row text-center">
                        <div id="verde" class="col-sm-12">
                            <img src="{{asset('/img/navidad/verde.png')}}" class="img-fluid" alt="fecha de inicio sorteo">
                        </div>
                        <div class="sobre">
                                <img src="{{asset('/img/navidad/carta.svg')}}" class="img-fluid" alt="">
                            </div>
                        <div class="col-sm-12 mt-3">
                            <img src="{{asset('/img/navidad/cafe.png')}}" class="img-fluid" alt="fecha de ganador sorteo">
                        </div>
                        
                        <div class="col-sm-12 mt-3">
                            <img src="{{asset('/img/navidad/rojo.png')}}" class="img-fluid" alt="fecha de ganador sorteo">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="restricciones">
    <div class="container">
        <div class="restricciones__info">
            <h2>Restricciones</h2>
            <ol class="pt-4">
                <li>Participación:</li>
                <ol>
                    <li>La dinámica "El Buzón de Santa" es organizada por Grupo Nicxa y se llevará a cabo exclusivamente en las sucursales de Burger King de Grupo Nicxa.</li>
                    <li>Para participar, los interesados deben adquirir un King Jr en cualquier sucursal participante. Cada King Jr incluirá una carta para que los niños escriban su carta a Santa, sino está incluida favor de solicitarla al cajero (dentro del periodo de vigencia o hasta agotar existencias).</li>
                    <li>También se pueden solicitar cartas a blanco y negro en cualquier otra compra (no importando el producto ni mínimo de compra), pero solo serán válidas las cartas adquiridas con el King Jr y que estén a color.</li>
                    <li>Sólo se entregarán 1 carta por ticket.</li>
                    <li>La dinámica estará vigente hasta el 18 de diciembre de 2023 o hasta agotar existencia de las cartas en cada sucursal.
                    </li>
                </ol>
                <br>
                <li>Contenido de la Carta:</li>
                <ol>
                    <li>En la carta, el padre o tutor deberá proporcionar su nombre, número celular, y nombre y edad del niño. Al llenar y depositar la carta en el buzón da autorización de entregar dicha información a Burger King (Operadora EXE).</li>

                </ol>
                <br>
                <li>Premios:</li>
                <ol>
                    <li>Habrá 5 ganadores seleccionados al azar.</li>
                    <li>Cada ganador recibirá una tarjeta de regalo de Amazon por un valor de $4,000, la cual será entregada físicamente en la sucursal de donde sea dicho ganador el 22 de diciembre del 2023.</li>

                </ol><br>
                <li>Ganadores:</li>
                <ol>
                    <li>Los ganadores serán seleccionados al azar y anunciados en las redes sociales de Grupo Nicxa (Instagram: @GrupoNicxaOficial, Facebook: Grupo Nicxa, TikTok: @GrupoNicxa).</li>
                    <li>Los ganadores también serán contactados a través del número de teléfono proporcionado en la carta.</li>
                    <li>Si no hay respuesta de los ganadores en un periodo de 24 horas, los premios se otorgarán a otros participantes seleccionados al azar.</li>
                </ol>
                <br>
                <li>Entrega de premios:</li>
                <ol>
                    <li>La entrega de premios se realizará el 22 de diciembre de 2023, en las sucursales de Burger King, donde tendrán que firmar una carta confirmando la entrega del premio.</li>
                </ol>
                <br>
                <li>Restricciones:</li>
                <ol>
                    <li>Solo se permitirá un ganador por familia.</li>
                    <li>S Burger King se reserva el derecho de descalificar a participantes que incumplan con las bases y condiciones.</li>
                </ol>
                <br>
                <li>Disposiciones legales:</li>
                <ol>
                    <li>La participación en la dinámica implica la aceptación total de estas bases y condiciones.</li>
                    <li>Burger King se reserva el derecho de descalificar a participantes que incumplan con las bases y condiciones.</li>
                    <li>Cualquier situación no contemplada en estas bases será resuelta por Burger King de manera soberana.</li>
                </ol>
            </ol>
            <p>Nota Importante: La participación en "El Buzón de Santa" no garantiza la realización de los deseos escritos en las cartas. La campaña tiene como objetivo crear una experiencia festiva y otorgar premios a los participantes seleccionados al azar. ¡Buena suerte a todos los participantes!</p>
        </div>
    </div>
</section>

@endsection