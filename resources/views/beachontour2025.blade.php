@extends('layouts.beach')
@section('content')

    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/beachon2025.css') }}">
       
    @endpush
    @push('title')
Beach on tour 2025
@endpush
    <section class="header">
        <div class="container">
            <div class="contenido text-center">
                <img src="{{ asset('img/beachon2025/logo-bk-solid.svg') }}" width="300" alt="Logotipo Burger King">
                <div>
                    <img src="{{ asset('img/beachon2025/logo-beach-on.svg') }}" class="beach-on-logo" alt="">

                </div>
            </div>
        </div>
       <div class="d-block d-sm-block d-md-block d-lg-block">
        <div class="izquierda-logo">
            <img src="{{asset('img/beachon2025/logo-sin-convervadores.svg')}}" width="200" alt="">
        </div>
        <div class="derecha-logo">
            <img src="{{asset('img/beachon2025/logo-uber-eats.svg')}}" width="200" alt="">
        </div>
       </div>
       {{-- <div class="d-block d-sm-block d-md-none d-lg-none">
        <div class="contenido__responsive text-center">
            <div >
                <img src="{{asset('img/beachon2025/logo-sin-convervadores.svg')}}" width="300" alt="">
            </div>
            <div>
                <img src="{{asset('img/beachon2025/logo-uber-eats.svg')}}" width="300" alt="">
            </div>
        </div>
       </div> --}}
    </section>
    <section class="descripcion">
        <div class="container">
            <div class="descripcion__contenido">
                <p class="text-center pb-4">Real Whopper Beach es una campaña de conciencia ambiental impulsada por Burger King y
                    aliados, que desde el año 2023 busca activar a las comunidades costeras a través de limpiezas de playa,
                    talleres educativos y activaciones con impacto positivo.</p>
                <div class="row pt-5 pb-5 ">
                    <div class="col-md-6 col-sm-12 m-auto">
                        <video src="{{ asset('video/BK_Spot_PreCampana_4.mp4') }}" width="100%" autoplay preload="metadata"
                        loop muted controls></video>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <span>2023 | 2024</span>
                        <h1 class="counter" id="counter">
                             <br>
                        </h1>
                        <h3>Kilogramos de basura</h3>
                        <div class="row pt-3 pl-5 pr-5">
                            <div class="col text-center">
                                <h2>
                                    1,826 <br>
                                </h2>
                                <p>Participantes</p>
                            </div>
                            <div class="col text-center">
                                <h2>
                                    3,339 <br>
                                </h2>
                                <p>Merch <br> entregada</p>
                            </div>
                            <div class="col text-center">
                                <h2>
                                    1,224 <br>
                                </h2>
                                <p>Hamburguesas <br> entregadas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tercera-edicion">
        <div class="container">
            <div class="tercera-edicion__contenido text-center">
                <img src="{{ asset('img/beachon2025/logo-3ra-edicion.svg') }}" width="320" alt="">
                <p>Celebramos la 3ª edición de Real Whopper Beach 2025, una campaña de verano que impulsa talleres
                    educativos, limpiezas masivas en playas de Yucatán y activaciones ambientales, sumando aliados y
                    voluntarios para generar impacto real en nuestras costas.</p>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-md-6 col-sm-12">
                    <div class="imagenes text-center">
                        <h1>TALLERES</h1>
                        <img src="{{asset('img/beachon2025/feedback-1/v-1.png')}}" class="img-fluid pt-2" alt="">
                        <img src="{{asset('img/beachon2025/feedback-1/v-2.png')}}" class="img-fluid pt-4" alt="">
                        <img src="{{asset('img/beachon2025/feedback-1/v-3.png')}}" class="img-fluid pt-4" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="imagenes text-center">
                        <h1>LIMPIEZAS</h1>
                       <div class="row">
                        <div class="col-6">
                            <img src="{{asset('img/beachon2025/feedback-1/1.png')}}" class="img-fluid pt-2" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('img/beachon2025/feedback-1/2.png')}}" class="img-fluid pt-2" alt="">
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-6">
                            <img src="{{asset('img/beachon2025/feedback-1/3.png')}}" class="img-fluid pt-5" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('img/beachon2025/feedback-1/4.png')}}" class="img-fluid pt-5" alt="">
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>

    <section class="inscripcion mt-5 mb-5">
        <div class="container">
            <div class="inscripcion__contenido text-center">
                <h2>¡Sé de los primeros 45 en inscribirte y recibe merch oficial!</h2>
                <span>Además, podrías tener la oportunidad de contar con transporte gratuito al evento.</span>
               {{--<div class="d-none d-sm-none d-md-block d-lg-block">
                 <div id="merch">
                    <img src="{{asset('img/beachon2025/seccion-bolsa/palmera-izq.png')}}" class="img0" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/habanico.png')}}" class="img1" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/bolsa.png')}}" class="img2" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/gorra.png')}}" class="img3" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/palmera-dere.png')}}" class="img4" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/gaviotas.png')}}" class="img5" />
                  </div>
               </div> --}}
               <img src="{{asset('img/beachon2025/merch.png')}}" class="img-fluid">
                <p>En el malecón de Progreso realizaremos activaciones especiales con entrega de cupones, merch, dinámicas interactivas, bailes, juegos y un equipo de promo entregando Whoppers gratis.</p>
            </div>
        </div>
    </section>

    <section class="fechas">
        <img src="{{asset('img/beachon2025/botella.png')}}" class="img-fluid botella" alt="botella">
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-5 mt-5">
                    <div class="gallery-container">
                        <div class="gallery">
                          <button class="nav prev">&#10094;</button>
                          <div class="images-wrapper">
                            <img src="{{asset('img/beachon2025/carrusel/1.jpg')}}" class="slide active" alt="Imagen 1" />
                            <img src="{{asset('img/beachon2025/carrusel/2.jpg')}}" class="slide" alt="Imagen 2" />
                            <img src="{{asset('img/beachon2025/carrusel/3.jpg')}}" class="slide" alt="Imagen 3" />
                            <img src="{{asset('img/beachon2025/carrusel/4.jpg')}}" class="slide" alt="Imagen 4" />
                            <img src="{{asset('img/beachon2025/carrusel/5.jpg')}}" class="slide" alt="Imagen 5" />
                            <img src="{{asset('img/beachon2025/carrusel/6.jpg')}}" class="slide" alt="Imagen 6" />
                          </div>
                          <button class="nav next">&#10095;</button>
                        </div>
                        <div class="dots">
                          <span class="dot active" data-index="0"></span>
                          <span class="dot" data-index="1"></span>
                          <span class="dot" data-index="2"></span>
                          <span class="dot" data-index="3"></span>
                          <span class="dot" data-index="4"></span>
                          <span class="dot" data-index="5"></span>
                          <span class="dot" data-index="6"></span>
                        </div>
                      </div>
                </div>
                <div class="col-md-6 col-sm-12 m-auto calendario-container mt-5">
                   
                    <div class="image-container mt-4">
                        <div class="switch-container">
                            <div class="switch">
                                <button id="julioBtn" class="active">JULIO</button>
                                <button id="agostoBtn" class="inactive">AGOSTO</button>
                            </div>
                        </div>
                          <img id="imgJulio" class="active-img mt-2" src="{{asset('/img/beachon2025/calendario.svg')}}" alt="Julio">
                          <img id="imgAgosto" class="mt-2" src="{{asset('/img/beachon2025/cal-agosto.svg')}}" alt="Agosto">
                    </div>
                    <img src="{{asset('/img/beachon2025/info.png')}}" class="img-fluid text-center" alt="">
                    {{-- <img src="{{asset('/img/beachon2025/calendario.svg')}}" class="img-fluid" alt="calendario"> --}}
                </div>
            </div>
            <img src="{{asset('img/beachon2025/botella.png')}}" class="botella-m" alt="botella">
            <div class="fechas__contenido boton-wrapper " id="boton-wrapper">
               <a href="https://docs.google.com/forms/d/e/1FAIpQLSdMUtUw8F-XTycdhScNvoqvRCNxbV-8-OkpMAiMoSFDU51zCw/viewform?usp=header" target="blank_" class="btn btn-primary inscribete boton-fijo" >INSCRÍBETE</a>
            </div>
            <img src="{{asset('img/beachon2025/estrella.png')}}" class="estrella-m" alt="">
        </div>
        <img src="{{asset('img/beachon2025/estrella.png')}}" class="img-fluid estrella" alt="estrella de mar">
        
        <div class="patrocinadores">
            <div class="container">
                <div class="patrocinadores__contenido text-center">
                    
                    <div class="d-none d-sm-none d-md-block d-lg-block">
                        <img src="{{asset('img/beachon2025/logo-patrocinadores.svg')}}" width="320" alt="">
                        <div class="row">
                            <div class="col m-auto">
                                <img src="{{asset('img/beachon2025/logo-limpiemos-yuc.svg')}}" width="300" alt="">
                            </div>
                            <div class="col m-auto">
                                <img src="{{asset('img/beachon2025/logo-bk-solid.svg')}}" width="300" alt="">
                            </div>
                            <div class="col m-auto">
                                <img src="{{asset('img/beachon2025/logo-uber-eats-vertical.svg')}}" width="250" alt="">
                            </div>
                            <div class="col m-auto">
                                <img src="{{asset('img/beachon2025/biologia.png')}}" width="100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-sm-block d-md-none d-lg-none">
                        <img src="{{asset('img/beachon2025/logo-patrocinadores.svg')}}" width="280" alt="">

                        <div class="patrocinadores-m">
                            <img src="{{asset('img/beachon2025/logo-limpiemos-yuc-m.svg')}}" width="90" alt="">
                            <img src="{{asset('img/beachon2025/logo-bk-solid-m.svg')}}" width="90" alt="">
                            <img src="{{asset('img/beachon2025/logo-uber-eats-vertical-m.svg')}}" width="50" alt="">
                            <img src="{{asset('img/beachon2025/biologia.png')}}" width="60" alt="">
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer mt-5">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-4 col-sm-12 pt-4">
                    <img src="{{ asset('img/beachon2025/logo-beach-on-positivo.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-4 col-sm-12 pt-4">
                    <h1 class="contacto">Contáctanos</h1>
                    <div class="brands">
                        <a href=""><img src="{{asset('img/beachon2025/facebook-brands.svg')}}" width="20" alt=""></a>
                        <a href=""><img src="{{asset('img/beachon2025/instagram-brands.svg')}}" width="20" alt=""></a>
                        <a href=""><img src="{{asset('img/beachon2025/tiktok-brands.svg')}}" width="20" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 enlaces m-auto pt-4">
                    <a href="#">POLÍTICAS</a>
                    <a href="#">AVISO DE PRIVACIDAD</a>
                    <a href="#">TÉRMINOS Y CONDICIONES</a>
                </div>
            </div>
        </div>
    </footer>
    <script>

/* btn wrapper */
const wrapper = document.getElementById('boton-wrapper');

    function checkPosition() {
      const rect = wrapper.getBoundingClientRect();
      if (rect.top <= window.innerHeight - 100) {
        wrapper.classList.add('stop');
      } else {
        wrapper.classList.remove('stop');
      }
    }

    window.addEventListener('scroll', checkPosition);
    window.addEventListener('load', checkPosition);
/* counter */

 const counterElement = document.getElementById('counter');
    const endValue = 3896;
    const duration = 2000;
    const frameRate = 60;
    const totalFrames = Math.round(duration / (1000 / frameRate));
    let hasStarted = false;

    function startCounter() {
      let currentFrame = 0;
      const counter = setInterval(() => {
        currentFrame++;
        const progress = currentFrame / totalFrames;
        const value = Math.floor(progress * endValue);
        counterElement.textContent = value.toLocaleString();

        if (currentFrame >= totalFrames) {
          clearInterval(counter);
          counterElement.textContent = endValue.toLocaleString();
        }
      }, 1000 / frameRate);
    }

    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom >= 0
      );
    }

    window.addEventListener('scroll', () => {
      if (!hasStarted && isInViewport(counterElement)) {
        hasStarted = true;
        startCounter();
      }
    });

/* galería */

    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let current = 0;

    function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
        dots[i].classList.toggle('active', i === index);
    });
    current = index;
    }

    document.querySelector('.prev').addEventListener('click', () => {
    const next = (current - 1 + slides.length) % slides.length;
    showSlide(next);
    });

    document.querySelector('.next').addEventListener('click', () => {
    const next = (current + 1) % slides.length;
    showSlide(next);
    });

    dots.forEach(dot => {
    dot.addEventListener('click', () => {
        showSlide(Number(dot.dataset.index));
    });
    });

    showSlide(current);


    /* Boton */
    const julioBtn = document.getElementById("julioBtn");
    const agostoBtn = document.getElementById("agostoBtn");
    const imgJulio = document.getElementById("imgJulio");
    const imgAgosto = document.getElementById("imgAgosto");

    julioBtn.addEventListener("click", () => {
      julioBtn.classList.add("active");
      julioBtn.classList.remove("inactive");
      agostoBtn.classList.remove("active");
      agostoBtn.classList.add("inactive");
      imgJulio.classList.add("active-img");
      imgAgosto.classList.remove("active-img");
    });

    agostoBtn.addEventListener("click", () => {
      agostoBtn.classList.add("active");
      agostoBtn.classList.remove("inactive");
      julioBtn.classList.remove("active");
      julioBtn.classList.add("inactive");
      imgAgosto.classList.add("active-img");
      imgJulio.classList.remove("active-img");
    });
      </script>
@endsection
