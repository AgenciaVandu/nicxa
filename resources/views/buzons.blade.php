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
    li {
        list-style: none;
        color: #512314;
        font-size: 1.3em;
    }
    .arrow {
        background-image: url('img/navidad2022/arrow2.png');
        background-position: 500px 80px;
        background-repeat: no-repeat;
    }@media(max-width:1189px){
        .arrow {
            background-position: 420px 80px;
        }
    }@media(max-width:991px){
        .arrow {
            background-position: 320px 60px;
        }
    }@media(max-width:767px){
        .arrow {
            background-position: 260px 20px;
        }
    }@media(max-width:532px){
        .arrow {
            background-image: url('img/navidad2022/arrow3.png');
            background-position: 240px 40px;
        }
    }@media(max-width:414px){
        .arrow {
            background-image: url('img/navidad2022/arrow3.png');
            background-position: 200px 40px;
        }
    }

 </style>
@endpush

<header class="bbk-mundial">
</header>
<div>
    <div class="container">
        <h3 class="text-center pt-5 pb-3" style="font-family: flame-regular;">
        La Navidad llegó a Burger King y el Rey tiene sorpresas para ti. Pide tu carta en mostrador, llénala y mándasela a Santa a través de nuestro buzón el cual tendremos en cada una de nuestras sucursal.
        </h3>
        <figure class="text-center">
            <img src="{{asset('img/navidad2022/hamburg.png')}}" class="img-fluid" alt="">
        </figure>
        <h2 class="text-center p-5" style="font-family: flame-regular;">
        PASOS PARA ENVIARLE TU CARTA A SANTA Y GANAR UN AÑO DE WHOPPER GRATIS:
        </h2>
        <div class="row">
            <div class="col-6 m-auto texto-o">
                <h2 style="font-family: flame-regular; font-weight:300">1. Pide tu carta en mostrador</h2>
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
                <div class="col-6 text-center">
                    <figure>
                        <img src="{{asset('img/navidad2022/buzon.png')}}" class="img-fluid">
                    </figure>
                </div>
                <div class="col-6 m-auto text-center"">
                    <h2 style="font-family: flame-regular; font-weight:300">2. Llena el formato y mételo en nuestro buzón</h2>
                </div>
        </div>
        <div class="row">
        <div class="col-6 m-auto">
                <h2 class="duende" style="font-family: flame-regular; font-weight:300">3. Tómate una foto de duende <span>y súbela a tus redes sociales etiquetándonos: @GrupoNicxa @gruponicxaoficial #NavidadConBurgerKing </span></h3>
                
            </div>
            <div class="col-6 text-center">
                <figure>
                    <img src="{{asset('img/navidad2022/duende.png')}}" class="img-fluid">
                </figure>
            </div>
        </div>
        <div class="col-12 text-center pt-5 pb-5">
        <h1 class="text-center pt-2 pb-2" style="font-family: flame-regular;">
        TÉRMINOS Y CONDICIONES
        </h2>
            <li style="font-family: flame-regular; font-weight:300">-Participantes no mayores de 10 años.</li>
            <li style="font-family: flame-regular; font-weight:300">-Premio: whopperJr. sin queso con papas kids.</li>
            <li style="font-family: flame-regular; font-weight:300">-Máximo un whopper con papas por día.</li>
            <li style="font-family: flame-regular; font-weight:300">-Concurso abierto hasta el 1 de Enero del 2023.</li>
            <li style="font-family: flame-regular; font-weight:300">-Válido de Apertura a cierre.</li>
            <li style="font-family: flame-regular; font-weight:300">-El premio aplica únicamente en mostrador.</li>
            <li style="font-family: flame-regular; font-weight:300">-Para hacer válido tu premio el niño/a ganador deberá presentar una identificación con foto.</li>
            <li style="font-family: flame-regular; font-weight:300">-El premio únicamente podrá cobrarse con el niño/a ganador presente.</li>
            <li style="font-family: flame-regular; font-weight:300">-El ganador deberá escoger la sucursal en la cual cobrará sus premios.</li>
            <li style="font-family: flame-regular; font-weight:300">-El ganador se dará a conocer el día 9 de Enero en nuestras redes sociales. </li>
        </div>
    </div>
</div>

@endsection