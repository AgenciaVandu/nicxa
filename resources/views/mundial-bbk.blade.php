@extends('layouts.nicxa')
@section('content')
@push('css')
 <style>
    body {
        background-color: "#f7f3ed";
    }
    .bbk-mundial {
    margin-top: 3em;
    background-image: url('img/mundial/banner.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 500px;
    }@media(max-width:900px) {
        .bbk-mundial {
            background-image: url('img/mundial/banner-mundial-i.png');
        }
    }@media(max-width:500px) {
        .bbk-mundial {
            background-image: url('img/mundial/banner-mundial-m.png');
        }
    }

    .bbk-cuerpo {
        font-size: 1.7em;
    } @media (max-width:500px) {
        .bbk-cuerpo {
            font-size:1.2em;
        }
    }
 </style>
@endpush

<header class="bbk-mundial">
</header>
<section class="quienes-somos">
    <div class="container">
        <div class="text-center">
            <p style="font-size:1.7em;"><b>Burger King</b> y <b>Grupo Nicxa</b> estarán presentes en el evento de fútbol más grande del mundo con diferentes dinámicas. Porque la pasión se disfruta más con una hamburguesa en mano.</p>
            <figure>
                <img src="img/mundial/dinamicas.png" class="img-fluid mt-3 mb-4">
                <img src="img/mundial/banner-verde.png" alt="whopper jr gratis" class="img-fluid mb-3">
            </figure>
            <p class="bbk-cuerpo"><b>¡Compra unas papas y la hamburguesa corre por cuenta del Rey! <br class="d-none d-sm-none d-md-block d-lg-block"> Te regalamos un whopper Jr. en la compra de unas papas chicas</b></p>

            <p class="bbk-cuerpo">*Aplica de apertura a cierre. *Aplica los días que juegue la selección mexicana. <br class="d-none d-sm-none d-md-block d-lg-block">
            *Aplica únicamente en mostrador *Aplica para los partidos de las siguientes fechas: Dic, <b>9,10 13, 14, 17 y 18</b> (cuartos de final, semifinal y final). *No aplica con otras promociones.</p>

            <p class="bbk-cuerpo">Aplica en las siguientes sucursales de Grupo Nicxa: <br>
            <b>Mérida</b>: Montejo, Fco. de Montejo, Oriente, Itzaes, Norte, Altabrisa (sucursal en estacionamiento), Dorada (sucursal en estacionamiento), Caucel. Cancún: Las Avenidas, Gran Plaza. <b>Playa del Carmen</b>: Constituyentes. <b>Cozumel</b>: Leones. <b>Tabasco</b>: Cardenas, VHSA Cinepolis, VHSA Sendero (sucursal en estacionamiento). <b>Chiapas</b>: Santa Elena
            Txtla. Gtez, Diana cazadora Txtla. Gtez</p>

            <figure>
                <img src="img/mundial/banner-rojo.png" alt="papas gratis" class="img-fluid mt-4 mb-3">
            </figure>

            <p class="bbk-cuerpo"><b>Pide lo que sea en mostrador o AutoKing (auto-servicio), <br class="d-none d-sm-none d-md-block d-lg-block"> ¡grita GOOOL y recibe papas o helado gratis!</b></p>

            <p class="bbk-cuerpo">*Aplica de apertura a 5 pm. *Aplica los días que juegue la selección mexicana. *Producto gratis a elegir: papas chicas o cono sencillo *Aplica en la compra de cualquer producto *Aplica en mostrador y AutoKing (auto-servicio) *Hasta dos piezas de producto gratis por carro, solo en caso de ir más de una persona en el vehículo. *No aplica con otras promociones.</p>

            <p class="bbk-cuerpo">Aplica en todas las sucursales de Grupo Nicxa: <br>
            <b>Yucatán</b>: Montejo, Centro, Gran Plaza, Aviación, Plaza Dorada, Plaza Las Americas, Correo frances, Fco. de Montejo, Oriente, Itzaes, Norte, Altabrisa, Macroplaza,
            Sendero, Louvre, Caucel, Tizimin, Valladolid. Cancún: Las Avenidas, Gran Plaza, Las Americas, Lodemo, Mall. <b>Playa del Carmen</b>: Constituyentes, Las Americas, Juárez. <b>Cozumel</b>: Leones. <b>Tulum. Tabasco</b>: Cardenas, Zona Luz, Altabrisa, VHSA Cinepolis, VHSA Sendero. <b>Chiapas</b>: Comitan, San Cristobal, Galerías Tap,
            Santa Elena Txtla. Gtez, Las Flores tonalá, Diana cazadora Txtla. Gtez, Tuxtla Centro, Plaza Ambar Txtla. Gtez,</p>
            <figure>
                <img src="img/mundial/banner-naranja.png" alt="desayuno gratis" class="img-fluid mt-4 mb-3">
            </figure>
            <p class="bbk-cuerpo"><b>¡Tu apoya a la selección, el Rey se encarga del desayuno! <br class="d-none d-sm-none d-md-block d-lg-block"> 
            Compra un Croissandwich y te regalamos otro.</b></p>

            <p class="bbk-cuerpo">*Aplica de apertura a 12 pm. *Aplica los días que juegue la selección mexicana. *Aplica únicamente en mostrador *Aplica para los partidos de las siguientes fechas: Dic, <b>9,10 13, 14, 17 y 18</b> (cuartos de final, semifinal y final). *No aplica con otras promociones.</p>

            <p class="bbk-cuerpo">Aplica en las siguientes sucursales de Grupo Nicxa: <br>
            <b>Mérida</b>: Montejo, Fco. de Montejo, Oriente, Itzaes, Norte, Altabrisa (sucursal en estacionamiento), Dorada (sucursal en estacionamiento), Caucel. <b>Cancún</b>: Las Avenidas, Gran Plaza. <b>Playa del Carmen</b>: Constituyentes. <b>Cozumel</b>: Leones. <b>Tabasco</b>: Cardenas, VHSA Cinepolis, VHSA Sendero (sucursal en estacionamiento). <b>Chiapas</b>: Santa Elena Txtla. Gtez, Diana cazadora Txtla. Gtez</p>
        </div>
    </div>
</section>
@endsection