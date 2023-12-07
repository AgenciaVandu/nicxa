@extends('layouts.nicxa')
@section('content')
@push('css')
 <style>

    @font-face {
        font-family: flame-regular;
        src: url('font/flame-regular.ttf') format('truetype');
    }
    @font-face {
        font-family: FlameSans;
        src: url('font/FlameSans.otf') format('opentype');
    }
    body {
        background-color: #F3E5CB;
    }
    .quienes-somos {
        text-align: justify center;
    }
    .bbk-mundial {
    margin-top: 3em;
    background-image: url('img/navidad2022/banner.png');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 500px;
    }@media(max-width:600px) {
        .bbk-mundial {
            background-image: url('img/navidad2022/banner-m.png');
        }
    }
    

    h1, h2, h3 {
        color: #512314 ;
    } @media(max-width:767px){
        h2, h3 {
        font-size: 1.6em;
        }
    }@media(max-width:560px){
        h2, h3 {
        font-size: 1.4em;
        }
        .duende {
            font-size: 1.1em;
        }
    }
    .texto-o{
        text-align: right;
    } @media(max-width:767px){
        .texto-o{
        text-align: center;
        }   
    }
    @media(max-width:767px){
        .texto-o{
        text-align: center;
        }   
    }
    .condiciones li {
        list-style: none;
        color: #512314;
        font-size: 1.3em;
    }
    .arrow {
        background-image: url('img/navidad2022/arrow2.png');
        background-position: 470px 40px;
        background-repeat: no-repeat;
    }@media(max-width:1189px){
        .arrow {
            background-position: 420px 80px;
        }
    }@media(max-width:991px){
        .arrow {
            background-position: 270px 50px;
        }
    }@media(max-width:767px){
        .arrow {
            background-image: url('img/navidad2022/arrow3.png');
            background-position: 220px 40px;
        }
    }@media(max-width:532px){
        .arrow {
            background-image: url('img/navidad2022/arrow3.png');
            background-position: 180px 60px;
        }
    }@media(max-width:414px){
        .arrow {
            background-image: url('img/navidad2022/arrow3.png');
            background-position: 150px 40px;
        }
    }@media(max-width:360px){
        .arrow {
            background-image: url('img/navidad2022/arrow3.png');
            background-position: 130px 40px;
        }
    }
    .arrow2 {
        background-image: url('img/navidad2022/arrow1.png');
        background-position: 510px 160px;
        background-repeat: no-repeat;
    }@media(max-width:1189px){
        .arrow2 {
            background-position: 370px 180px;
        }
    }@media(max-width:991px){
        .arrow2 {
            background-position: 280px 180px;
        }
    }@media(max-width:767px){
        .arrow2 {
            background-image: url('img/navidad2022/arrow4.png');
            background-position: 220px 150px;
        }
    }@media(max-width:414px){
        .arrow2 {
            background-image: url('img/navidad2022/arrow4.png');
            background-position: 170px 130px;
        }
        .condiciones li {
        font-size: 1em;
        }
        .tamano {
            font-size: 1.2em;
        }
    }@media(max-width:360px){
        .arrow2 {
            background-image: url('img/navidad2022/arrow4.png');
            background-position: 130px 110px;
        } .titular-buzon{
            font-size: 1.3em;
        }
    }
    .orientacion {
        text-align: right;
    }
    

 </style>
@endpush

<header class="bbk-mundial">
</header>
<div>
    <div class="container">
        <h3 class="text-center pt-5 pb-3" style="font-family: flame-regular; font-weight:300;">
        La Navidad llegó a Burger King y el Rey tiene sorpresas para ti. Pide tu carta en mostrador, llénala y mándasela a Santa a través de nuestro buzón el cual tendremos en cada una de nuestras sucursal.
        </h3>
        <figure class="text-center">
            <img src="{{asset('img/navidad2022/hamburg.png')}}" class="img-fluid" alt="">
        </figure>
        <h1 class="text-center titular-buzon pb-5" style="font-family: flame-regular; font-weight:300;">
        PASOS PARA ENVIARLE TU CARTA A SANTA <br class="d-none d-sm-none d-md-block d-lg-block"> Y GANAR UN AÑO DE WHOPPER GRATIS:
        </h1>
        <div class="row">
            <div class="col-6 m-auto texto-o">
                <h2 class="tamano" style="font-family: flame-regular; font-weight:800">1. <span style="font-weight:300">Pide tu carta en mostrador</span></h2>
                <img srcset="{{asset('img/navidad2022/arrow1.png 800w,
                     arrow4.png 500w')}}" 
                     sizes="(max-width: 320px) 280px,
                     (max-width: 480px) 440px, 800px"
                class="img-fluid">
            </div>
            <div class="col-6 text-center">
                <figure>
                    <img srcset="{{asset('img/navidad2022/carta.png')}}" class="img-fluid">
                </figure>
            </div>
        </div> 
        <div class="row arrow">
            <div class="col-6 text-center orientacion">
                    <figure>
                        <img src="{{asset('img/navidad2022/helado.png')}}" class="img-fluid">
                    </figure>
            </div>
            <div class="col-6 m-auto text-center" >
                <h2 class="tamano" style="font-family: flame-regular; font-weight:300">2. Llena el formato, enseñalo en mostrador y pide un cono gratis</h2>
            </div>
        </div>     
        <div class="row arrow2">
                <div class="col-7 m-auto pl-5 text-center"">
                    <h2 class="tamano" style="font-family: flame-regular; font-weight:300">3. Llena el formato y mételo en nuestro buzón</h2>
                </div>
                <div class="col-5 text-center">
                    <figure>
                        <img src="{{asset('img/navidad2022/buzon.png')}}" class="img-fluid">
                    </figure>
                </div>
        </div>
        <div class="row pt-5">
        <div class="col-4 col-md col-lg text-center">
                <figure>
                    <img src="{{asset('img/navidad2022/duende.png')}}" class="img-fluid">
                </figure>
            </div>
             <div class="col-8 col-md col-lg m-auto">
                <h2 class="tamano" style="font-family: flame-regular; font-weight:300">5. Tómate una foto de duende <span>y súbela a tus redes sociales etiquetándonos: @GrupoNicxa @gruponicxaoficial #NavidadConBurgerKing </span>
                 </h2>
                
            </div>
        </div>
        <div class="col-12 text-center pt-5 pb-5">
        <h1 class="text-center pt-2 pb-2" style="font-family: flame-regular;">
        TÉRMINOS Y CONDICIONES
        </h2>
            <div class="condiciones">
                <li style="font-family: flame-regular; font-weight:300">-Participantes no mayores de 10 años.</li>
                <li style="font-family: flame-regular; font-weight:300">-Premio: whopperJr. sin queso con papas kids.</li>
                <li style="font-family: flame-regular; font-weight:300">-Máximo un whopper con papas por día.</li>
                <li style="font-family: flame-regular; font-weight:300">-Concurso abierto hasta el 1 de Enero del 2023.</li>
                <li style="font-family: flame-regular; font-weight:300">-Válido de Apertura a cierre.</li>
                <li style="font-family: flame-regular; font-weight:300">-El premio aplica únicamente en mostrador.</li>
                <li style="font-family: flame-regular; font-weight:300">-El premio podrá cobrarse a partir de que demos a conocer al ganador el día 8 de Enero del 2023.</li>
                <li style="font-family: flame-regular; font-weight:300">-Para hacer válido tu premio el niño/a ganador deberá presentar una identificación con foto.</li>
                <li style="font-family: flame-regular; font-weight:300">-El premio únicamente podrá cobrarse con el niño/a ganador presente.</li>
                <li style="font-family: flame-regular; font-weight:300">-El ganador deberá escoger la sucursal en la cual cobrará sus premios.</li>
                <li style="font-family: flame-regular; font-weight:300">-El ganador se dará a conocer el día 9 de Enero en nuestras redes sociales. </li>
            </div>
        </div>
    </div>
</div>
@push ('scripts')
<script>
    $(document).ready(function() {
        $('#myModal').modal('toggle')
    });
</script>
@endpush
@endsection