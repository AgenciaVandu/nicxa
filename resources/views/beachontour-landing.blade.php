@extends('layouts.nicxa')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/beach-on.css') }}">
        <style>
            body {
                background-color: #F4E9E8;
            }
        </style>
    @endpush
    <header class="beach-back" style="background-color: #F2E2D1;">
       <div class="d-none d-sm-none d-md-block d-lg-block">
        <img src="{{ asset('img/beach/banner/banner-2.png') }}" class="img-fluid w-100">
       </div>
       <div class="d-block d-sm-block d-md-none d-lg-none">
        <div style="padding-top: 2em;">
            <img src="{{ asset('img/beach/banner/m-banner-2.png') }}" class="img-fluid w-100">
        </div>
       </div>
    </header>
   <div style="background-color: #F2E2D1;">
    <div class="container" >
        <div class="conciencia">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mov-texto">
                    <h1 class="font-flame" style="color:#003227;">
                        Conciencia <br> Medioambiental
                    </h1>
                    <p class="text-justify">
                        Este verano, en Burger King®, continuamos con nuestro compromiso de generar <span class="font-flame-regular">conciencia medioambiental</span> a través de nuestra campaña "Real Whopper® Beach on Tour".
                        <br><br>
                        En <b class="font-flame-regular">2024</b>, queremos que nuestras playas sean como nuestras Whopper®: <span class="font-flame-regular">sin artificiales</span>. Por ello, regresamos a las playas del sureste mexicano con limpiezas colectivas y actividades para involucrar a la comunidad en la conservación de nuestros espacios recreativos.
                        <br><br>
                        Únete a nosotros en esta <span class="font-flame-regular">segunda edición</span> y contribuye a mantener nuestras playas limpias. Juntos podemos hacer una gran diferencia, porque en Burger King® creemos que el verdadero sabor viene de lo natural y lo auténtico, tanto en nuestra comida como en nuestro entorno.
                    </p>

                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto mov-video">
                    <video src="{{asset('/video/limpieza-whopper.mp4')}}" width="100%" autoplay preload="metadata" loop muted controls></video>
                </div>
            </div>
        </div>
    </div>
    <div class="fondo-verde">
        <div class="container">
            <div class="text-center pt-5">
                <h2>En nuestra 1era edición en 2023 logramos:</h2>
            </div>
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 text-center">
                        <img src="{{asset('img/beach/banner/Vector-1.svg')}}" width="100" alt="">
                        <h3 class="font-flame pt-3">+200</h3>
                        <p class="font-flame-regular">Participantes</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-center">
                        <img src="{{asset('img/beach/banner/Vector-2.svg')}}" width="116" alt="">
                        <h3 class="font-flame pt-3">+300</h3>
                        <p class="font-flame-regular">Participantes</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-center">
                        <img src="{{asset('img/beach/banner/Vector-3.svg')}}" width="116" alt="">
                        <h3 class="font-flame pt-3">+140</h3>
                        <p class="font-flame-regular">Participantes</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 text-center">
                        <img src="{{asset('img/beach/banner/Vector-4.svg')}}" width="137" alt="">
                        <h3 class="font-flame pt-3">+1 Tonelada</h3>
                        <p class="font-flame-regular">Participantes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="pasos-recoleccion">
    <div class="container-fluid">
        <div class="text-center pasos">
            <div class="titular pb-4">
                <h2 class="font-flame" style="color:#003227;">PASOS PARA LA RECOLECCIÓN</h2>
            <p>Contribuye a mantener nuestras playas limpias y proteger el medio ambiente <br class="d-none d-sm-none d-md-block d-lg-block"> con estos simples pasos de recolección.</p>
            </div>
            <div class="d-none d-sm-none d-md-block d-lg-block">
                <img src="{{asset('img/beach/banner/playas.png')}}" class="img-fluid">
               </div>
               <div class="d-block d-sm-block d-md-none d-lg-none">
                <div class="p-0">
                    <img src="{{asset('img/beach/banner/playa-m.png')}}" class="img-fluid" alt="">
                </div>
               </div>

            <div class="text-center mt-5 mb-5">
                <img src="{{asset('img/beach/fecha.png')}}" class="img-fluid" alt="">
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 pt-4">
                    <div class="row">
                        <div class="col-4 ">
                            <img src="{{asset('img/beach/banner/1.svg')}}" class="100" alt="">
                        </div>
                        <div class="col-8 text-center">
                            {{-- <h4 class="font-flame" style="color:#003227;">LIMPIA</h4> --}}
                            <span>Registrate en el formulario</b></small>
                            <a href="http://" class="btn btn-success mt-2">
                                Registrate ahora
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pt-4">
                    <div class="row">
                        <div class="col-4 ">
                            <img src="{{asset('img/beach/banner/2.svg')}}" class="100" alt="">
                        </div>
                        <div class="col-8 text-left">
                            <span>Elige la ciudad en la que te gustaría participar.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pt-4">
                    <div class="row">
                        <div class="col-4 ">
                            <img src="{{asset('img/beach/banner/3.svg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-8 text-left">
                            <span>Únete al grupo de WhatsApp, seleccionando la ciudad a la que acudirás.</span> <br>
                            <small>El link al grupo lo puedes encontrar al terminar el formulario.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pt-4">
                    <div class="row">
                        <div class="col-4 ">
                            <img src="{{asset('img/beach/banner/4.svg')}}" class="100" alt="">
                        </div>
                        <div class="col-8 text-left">
                            <span>¡Listo! Nos vemos en la playa.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div>
   </div>
   </div>
   <section class="sets-real-whopper" style="background-color: #F2E2D1;">
    <div class="container">
        <div class="text-center actividades" >
            <h2 class="font-flame" style="color:#003227;">LUGAR Y FECHAS</h2>
            <p>¡Únete a nuestras recolectas masiva y hagamos la diferencia juntos!</p>
        </div>
        <div class=" pt-4 actividades-sets text-center">
            <div class="mapas-fechas">
                <div class="republica">
                    <img src="{{asset('img/beach/lugares/Mapa-RWBOT-01-1.png')}}" alt="Lugares whopper beach on tour" class="img-fluid">
                </div>
                <div class="fechas">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-02.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-03.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-04.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-05.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-06.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-07.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">
                    <img src="{{asset('img/beach/lugares/Mapa RWBOT-08.png')}}" alt="Fecha whopper beach on tour" class="img-fluid">

                </div>
            </div>
            <div class="col-12">
                <div class="text-center pt-3">
                    <a href="https://chat.whatsapp.com/FMjcnTxMQXAIlFd1Xp9lKO" target="blank_">
                     <img src="{{asset('img/beach/cta/3.png')}}" class="img-fluid" alt="">
                    </a>
                 </div>
            </div>
        </div>
        <div class="segmentacion pt-5">
            <div class="text-center">
                <h2 class="font-flame" style="color:#003227;">UBICACIÓN</h2>
                <p>Encuentra nuestros puntos fijos de recolección. Estos puntos están designados estratégicamente para que puedas realizar tus contribuciones y participar en nuestra iniciativa.
                    ¡Visítalos y únete a nosotros en la tarea de preservar nuestro entorno y mantener nuestras playas limpias!
                </p>
            </div>
            <iframe src="https://www.google.com/maps/d/embed?mid=1slMZD6LEYGNnNdjzMySw01Hlcsu72Ic&ehbc=2E312F" width="100%" height="480"></iframe>
            <div class="cta-mapa">
               <div  class="text-center pt-3">
                <a href="https://www.google.com/maps/d/u/0/edit?mid=1slMZD6LEYGNnNdjzMySw01Hlcsu72Ic&usp=sharing" target="blank_">
                    <img src="{{asset('img/beach/cta/4.png')}}" class="100" alt="">
                </a>
               </div>
            </div>
        </div>
        <div class="aliados">
            <div class="text-center">
                <h2 class="font-flame" style="color:#003227;">ALIADOS</h3>
                <p class="pb-4">Juntos, estamos comprometidos en hacer una diferencia y trabajar por un objetivo común.</p>
                    <figure>
                        <img src="{{asset('img/beach/aliados.png')}}" alt="aliados grupo nicxa" class="img-fluid">
                    </figure>
                </div>
                <div class="d-block d-sm-block d-md-none d-lg-none">
                    <figure>
                        <img src="{{asset('img/beach/m-aliados-v.png')}}" alt="aliados grupo nicxa" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
   </section>
    <section class="redes">
        <div class="palmeras">
            <div class="container">
                <div class="centrado-beach">
                    <div class="pb-5 text-center">
                        <h2 class="font-flame" style="color:#003227;">
                            DESCUBRE MÁS EN NUESTRAS REDES SOCIALES
                        </h2>
                    </div>
                    <div class="row text-center">

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="https://www.facebook.com/gruponicxa" target="blank_">
                                <img src="{{ asset('img/beach/redes/fb.png') }}" class="img-fluid" alt="logo facebook">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="https://www.instagram.com/gruponicxaoficial/" target="blank_">
                                <img src="{{ asset('img/beach/redes/ig.png') }}" class="img-fluid" alt="logo instagram">
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <a href="https://www.tiktok.com/@gruponicxa" target="blank_">
                                <img src="{{ asset('img/beach/redes/tk.png') }}" class="img-fluid" alt="logo tiktok">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="restricciones-beach">
        <div class="container">
            <div class="text-center pt-5 pb-5">
                <h5>Restricciones</h5>
                <p>Los cupones son válidos hasta el 12 de septiembre del 2023. No acumulable con otras promociones o descuentos. No
                    canjeable por dinero en efectivo. No transferible. Sujeto a disponibilidad en el restaurante
                    participante. No válido en servicios de entrega a domicilio. Aplican términos y condiciones adicionales.
                    Burger King® de Grupo Nicxa®, empresas aliadas y dependencias gubernamentales que participan en la
                    campaña Real Whopper® Beach on tour México, tienen como objetivo reducir el impacto negativo de la
                    basura en las playas y áreas turísticas de la península y sus alrededores, con el principal objetivo de
                    evitar la proliferación de la fauna nociva, la acumulación de distintos tipos de basura y desechos,
                    haciendo conciencia en la sociedad sobre el cuidado del medio ambiente principalmente en la temporada
                    vacacional.
                    <br> <br>
                    ©2023 Grupo Nicxa®. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
@endsection
