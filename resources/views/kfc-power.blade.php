@extends('layouts.nicxa')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/powerkfc.css') }}">
        <style>
            body {
                background-color: #F4E9E8;
            }
        </style>
    @endpush
    @push('title')
       Únete al reto #KFCCHICKENLEGS  - Por Grupo Nicxa
    @endpush

    @push('descripcion')
        <meta name="description"
            content="KFC te invita a unirte al reto #KFCChickenLegs. Demuestra tus habilidades físicas para tener la oportunidad de ganar increíbles premios. Este reto está abierto para todo el público.">
    @endpush
    <header class="beach-back" style="background-color: #F2E2D1;">
        <img src="{{ asset('img/power/banner.png') }}" class="img-fluid w-100">
        {{-- <div class="d-block d-sm-block d-md-none d-lg-none">
            <div style="padding-top: 2em;">
                <img src="{{ asset('img/beach/banner/m-banner-2.webp') }}" class="img-fluid w-100">
            </div>
        </div> --}}
    </header>
    <div class="bg-red">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m-auto titulo-kfc">
                    <h1 class="national">¿Qué es el reto #KFCChickenLegs?</h1>
                    <p>KFC te invita a unirte al reto #KFCChickenLegs. Demuestra tus habilidades físicas para tener la oportunidad de ganar increíbles premios. Este reto está abierto para todo el público.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="{{asset('img/power/persona.png')}}" class="img-fluid" alt="Runner">
                </div>
            </div>
        </div>
    </div>
    <div class="como-participar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m-auto">
                    <h2>¿Cómo participar?</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ol>
                        <li>Grábate replicando el <span>video del Coronel</span></li>
                        <li>Publica tu video en TikTok usando el hashtag #KFCChickenLegs.</li>
                        <li>Asegúrate de etiquetar a @Gruponicxa en tu publicación</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="premios">
        <div class="container">
            <div class="text-center">
                <h1 class="national">PREMIOS</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="contenido uno">
                        <h1 class="national">1er lugar</h1>
                        <small>iPhone 15 Pro Max</small>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contenido uno">
                        <img src="{{asset('img/power/iphone.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 orden-2">
                    <div class="contenido dos ">
                        <img src="{{asset('img/power/tablet.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 m-auto orden-1">
                    <div class="contenido dos ">
                        <h1 class="national">2do lugar</h1>
                        <small>Samsung Galaxy Tab S9 FE+</small>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="contenido  tres">
                        <h1 class="national">3er lugar</h1>
                        <small>Nintendo Switch OLED</small>
                    </div>

                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contenido tres">
                        <img src="{{asset('img/power/swtich.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 orden-2">
                    <div class="contenido cuatro">
                        <img src="{{asset('img/power/bucket.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 m-auto orden-1">
                    <div class="contenido cuatro">
                        <h1 class="national">4er lugar</h1>
                        <small>2500 en comida KFC</small>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="fechas-importantes">
        <div class="container">
            <h2>FECHAS IMPORTANTES</h2>
            <div class="fechas">
                <div class="dia">
                    <h1 class="national-bold">12 DE AGOSTO</h1>
                    <small>Cierre del conteo de visualizaciones</small>
                </div>
                <div class="v-line">

                </div>
                <div class="dia">
                    <h1 class="national-bold">13 DE AGOSTO</h1>
                    <small>Anuncio de ganadores</small>
                </div>
            </div>
            <div class="cta-fechas">
                <a href="https://www.tiktok.com/@gruponicxa" target="blank_" class="btn btn-danger btn-lg">¡Participa ahora y demuestra tus habilidades!</a>
            </div>
        </div>
    </div>
    <section class="redes">
        <div class="palmeras">
            <div class="container">
                <div class="centrado-beach">
                    <div class="pb-5 text-center">
                        <h1 class="national-bold" style="color:#FF0000;">
                            DESCUBRE MÁS EN NUESTRAS REDES SOCIALES
                        </h1>
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
    <div class="restricciones-power">
        <div class="container">
            <div class="text-left pt-5 pb-5">
                <li style="padding: 0; list-style: none;">Bases para participar
                    <li>El concurso sólo es válido para personas físicas que sean residentes de los estados de Quintana Roo y Yucatán.</li>
                    <li>El concurso es individual y solo se premiara al titular del video y de la cuenta de TikTok</li>
                    <li>Si los participantes son menores de edad deberán de contar con la autorización de sus padres o tutor legal.</li>
                </li>
                <li style="padding: 0; list-style: none;">Mecanismo de Participación:
                    <ol>
                        <li>Graba un video replicando todo los pasos del desafío de KFC.</li>
                    <li>Sube tu video a TikTok a tu cuenta personal. (No se permiten cuentas deempresas).</li>
                    <li>En la descripción de tu video, incluye el hashtag oficial #KFCChickenLegs yetiqueta a la cuenta @gruponicxa.</li>
                    <li>Asegúrate de que tu perfil de TikTok sea público para que tu video sea visible paratodos.</li>
                    </ol>
                </li>
                <li style="padding: 0; list-style: none;">Periodo de Participación:
                    <li>Los videos pueden ser subidos desde el 15 de julio de 2024 hasta el 12 de agosto de 2024 a las 11:59 pm (hora del centro de México).</li>
                    <li>Los videos que se suban después de la fecha límite no serán considerados y no participarán en la premiación.</li>

                </li>
                <li style="padding: 0; list-style: none;">Fechas Importantes:
                    <li>Inicio de concurso: 15 de julio de 2024.</li>
                    <li>Fin de concurso: 12 de agosto de 2024 a las 11:59 pm (hora del centro de México)</li>
                    <li>Fecha de premiación: 13 de agosto de 2024 a la 1:00 pm (hora del centro de México).</li>
                </li>
                <li style="padding: 0; list-style: none;">Redes Participantes:
                    <li>El concurso solo se llevará a cabo exclusivamente en la plataforma de TikTok, los videos que se suban en otras plataformas no serán tomados en cuenta para definir a losganadores.</li>

                </li>
                <li style="padding: 0; list-style: none;">Premios:
                    <li>1° lugar: Un iPhone 15 Pro Max.</li>
                    <li>2° lugar: Una Samsung Galaxy Tab S9FE+.</li>
                    <li>3° lugar: Una consola Nintendo Switch OLED.</li>
                    <li>4° lugar: $2,500 en productos gratis de KFC.</li>
                </li>
                <li style="padding: 0; list-style: none;">Entrega de Premios:
                    <li>Los premios se entregarán en la sucursal de KFC que se indique en los canales      de difusión oficiales de Grupo Nicxa: Facebook Grupo Nicxa e Instagram @gruponicxaoficial.</li>
                    <li>Los ganadores serán contactados para reclamar sus premios. Si no hay respuesta de ellos      en un plazo de 7 días, perderán automáticamente el derecho a reclamarlos y  estos pasarán al siguiente en la lista.</li>
                    <li>Si un ganador es menor de edad, el premio se entregará en compañía de su representante,      tutor o cualquiera de sus padres, quienes deberán acreditar su identidad y      la relación con el menor.</li>
                </li>
                <li style="padding: 0; list-style: none;">Derechos de Uso de Imagen:
                    <li>Al participar en el concurso, los participantes otorgan a KFC México, Premium      Restaurants Brands, S. de RL de CV, Operadora de Franquicias AGN SA de CV      y Operadora Nicxa SA de CV su consentimiento para utilizar, reproducir,      distribuir, modificar, adaptar, y exhibir públicamente sus videos, nombre,      imagen en cualquier medio, incluyendo, pero no limitado a, redes sociales,      sitios web, materiales de marketing y publicidad, sin necesidad de obtener      consentimiento adicional o solicitar compensación económica.</li>
                    <li>Este consentimiento gratuito permanecerá vigente incluso después de la      finalización del concurso.</li>
                </li>
                <li style="padding: 0; list-style: none;">Mecánica de Selección del Ganador:
                    <li>Los ganadores serán seleccionados con base en el número de visualizaciones de      sus videos al cierre del período de participación. Los 4 videos con mayor      número de visualizaciones serán los ganadores, siendo el primer lugar el      que tenga mayor número de visualizaciones y así sucesivamente.</li>
                    <li>En caso de empate en el número de visualizaciones, se considerarán otros      criterios como la calidad del video, la creatividad y la originalidad del      mismo para determinar al ganador.</li>
                </li>
                <li style="padding: 0; list-style: none;">Cumplimiento de las Bases:
                    <li>Para ser considerado participante, el video debe cumplir con todos los      requisitos establecidos en estas bases.</li>
                </li>
                <li style="padding: 0; list-style: none;">Motivos de Descalificación:
                    <li>No seguir los pasos especificados en el mecanismo de participación.</li>
                    <li>No etiquetar a @gruponicxaoficial en el video.</li>
                    <li>No utilizar el hashtag #KFCChickenLegs.</li>
                    <li>No replicar de forma correcta el desafío de KFC.</li>
                    <li>Utilizar métodos fraudulentos o inapropiados para aumentar las visualizaciones del video.</li>
                    <li>Presentar un video que contenga contenido inapropiado, ofensivo, discriminatorio o que infrinja      los derechos de propiedad intelectual de terceros.</li>
                    <li>No ser residente legal de Quintana Roo o Yucatán mismo que deberán de acreditar con una      identificación oficial.</li>
                </li>
                <li style="padding: 0; list-style: none;">Condiciones de Participación:
                    <li>La participación en el concurso implica la aceptación total y sin reservas de estas bases.</li>
                    <li>KFC México, Premium Restaurants Brands, S. de RL de CV, Operadora de Franquicias AGN SA de CV y Operadora Nicxa SA de CV, Grupo Nicxa S.A. de C.V. se reservan el derecho de modificar o cancelar el concurso en cualquier momento sin previo aviso.</li>
                    <li>KFC México, Premium Restaurants Brands, S. de RL de CV, Operadora de Franquicias AGN SA de CV y Operadora Nicxa SA de CV, Grupo Nicxa S.A. de C.V. no son responsables de ningún daño o pérdida que pueda surgir como resultado de la participación en el concurso.</li>
                </li>
                <li style="padding: 0; list-style: none;">Aceptación de Términos: <br>
                    Al participar en este concurso, los participantes aceptan total e incondicionalmente todas y cada una de las bases y condiciones aquí descritas. El incumplimiento de cualquiera de estas bases implicará la descalificación automática del participante. <br>
                    Notificaciones: <br>
                    Cualquier notificación o comunicación relacionada con este concurso se realizará por los canales oficiales de Grupo Nicxa, Facebook Grupo Nicxa e Instagram @gruponicxaoficial <br>
                    Disposiciones Generales:
                    <li>Estos términos y condiciones constituyen el acuerdo total entre las partes, KFC México, Premium Restaurants Brands, S. de RL de CV, Operadora de Franquicias AGN SA de CV y Operadora Nicxa SA de CV (en adelante, las "Empresas"), y el participante en relación con el concurso y reemplazan cualquier acuerdo o entendimiento previo, ya sea oral o escrito.</li>
                    <li>Si alguna disposición de estos términos y condiciones se considera inválida o inaplicable, dicha disposición será eliminada de los términos y condiciones y las disposiciones restantes permanecerán en pleno vigor y efecto.</li>
                    <li>Las Empresas se reservan el derecho de modificar o cancelar el concurso en cualquier momento sin previo aviso.</li>
                    <li>Las Empresas no son responsables de ningún daño o pérdida que pueda surgir como resultado de la participación en el concurso.</li>
                </li>
                <br>
                <p>©2024 Grupo Nicxa®. Todos los derechos reservados.</p>

            </div>
        </div>
    </div>
@endsection
