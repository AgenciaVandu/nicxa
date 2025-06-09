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
            <div class="contenido">
                <img src="{{ asset('img/beachon2025/logo-bk-solid.svg') }}" width="300" alt="Logotipo Burger King">
                <img src="{{ asset('img/beachon2025/logo-beach-on.svg') }}" class="img-fluid" alt="">
            </div>
        </div>
       <div class="d-none d-sm-none d-md-block d-lg-block">
        <div class="izquierda-logo">
            <img src="{{asset('img/beachon2025/logo-sin-convervadores.svg')}}" width="300" alt="">
        </div>
        <div class="derecha-logo">
            <img src="{{asset('img/beachon2025/logo-uber-eats.svg')}}" width="300" alt="">
        </div>
       </div>
       <div class="d-block d-sm-block d-md-block d-lg-block">
        <div class="contenido__responsive text-center">
            <div >
                <img src="{{asset('img/beachon2025/logo-sin-convervadores.svg')}}" width="300" alt="">
            </div>
            <div>
                <img src="{{asset('img/beachon2025/logo-uber-eats.svg')}}" width="300" alt="">
            </div>
        </div>
       </div>
    </section>
    <section class="descripcion">
        <div class="container">
            <div class="descripcion__contenido">
                <p class="text-center pb-4">Real Whopper Beach es una campaña de conciencia ambiental impulsada por Burger King y
                    aliados, que desde el año 2023 busca activar a las comunidades costeras a través de limpiezas de playa,
                    talleres educativos y activaciones con impacto positivo.</p>
                <div class="row pt-5 pb-5">
                    <div class="col-md-6 col-sm-12">
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
        </div>
        {{-- Grid --}}
        <div class="grid-container mt-5 mb-5">
            <div class="box" style="grid-area: box-1" >
               <h1>Talleres</h1>
            </div>
            <div class="box" style="grid-area: box-2">
                <h4>Playas & Fauna</h4>
                <p>Taller enfocado en la importancia de las playas y especies que la habitan. Acompañado de dinámicas interactivas ysesiones de dibujo.</p>
                <span>19 de Julio / Sucursal Montejo / 12:00pm</span>

            </div>
            <div class="box" style="grid-area: box-3">
                <h4>Invertebrados Marionos</h4>
                <p>Interacción con ejemplares vivos y reptiles, y conocer su importancia en los ecosistemas.</p>
                <span>2 de agosto / Sucursal Norte / 12:00pm</span>
            </div>
            <div class="box" style="grid-area: box-4">
                <h4>Impacto ambiental sobre la costa en las tortugas</h4>
                <p>Descubre la importancia ecológica de las tortugas marinas y cómo impacta el ser humanos en las costas que afectan a las tortugas.</p>
                <span>9 de agosto / Sucursal Oriente / 12:00pm</span>
            </div>
            <div class="box" style="grid-area: box-5">
                <h1>Limpiezas</h1>
            </div>
            <div class="box" style="grid-area: box-6">
                <h4>Chicxulub</h4>
                <p>5 de Julio <br> 7:00am</p>
            </div>
            <div class="box" style="grid-area: box-7">
                <h4>Telchac Puerto</h4>
                <p>12 de Julio <br> 7:00am</p>
            </div>
            <div class="box" style="grid-area: box-8">
                <h4>Chuburná</h4>
                <p>26 de Julio <br> 7:00am</p>
            </div>
            <div class="box" style="grid-area: box-8">
                <h4>Progreso</h4>
                <p>17 de Agosto <br> 7:00am</p>
            </div>
           
        </div>
    </section>

    <section class="inscripcion">
        <div class="container">
            <div class="inscripcion__contenido text-center">
                <h2>¡Sé de los primeros 45 en inscribirte y recibe merch oficial!</h2>
                <span>Además, podrías tener la oportunidad de contar con transporte gratuito al evento.</span>
               <div class="d-none d-sm-none d-md-block d-lg-block">
                <div id="merch">
                    <img src="{{asset('img/beachon2025/seccion-bolsa/palmera-izq.png')}}" class="img0" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/habanico.png')}}" class="img1" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/bolsa.png')}}" class="img2" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/gorra.png')}}" class="img3" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/palmera-dere.png')}}" class="img4" />
                    <img src="{{asset('img/beachon2025/seccion-bolsa/gaviotas.png')}}" class="img5" />
                  </div>
               </div>
               <div class="d-block d-sm-block d-md-none d-lg-none">
                <img src="{{asset('img/beachon2025/merch.png')}}" class="img-fluid">
               </div>
                <p>En el malecón de Progreso realizaremos activaciones especiales con entrega de cupones, merch, dinámicas interactivas, bailes, juegos y un equipo de promo entregando Whoppers gratis.</p>
            </div>
        </div>
    </section>

    <section class="fechas">
        <img src="{{asset('img/beachon2025/botella.png')}}" class="img-fluid botella" alt="botella">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="carousel-container" ontouchstart="">
                        <button class="nav left" onclick="moveSlide(-1)">&#10094;</button>
                        <div class="carousel-track">
                          <div class="carousel-slide"><img src="/img/beachon2025/carrusel/1.jpg" /></div>
                          <div class="carousel-slide"><img src="/img/beachon2025/carrusel/2.jpg" /></div>
                          <div class="carousel-slide"><img src="/img/beachon2025/carrusel/3.jpg" /></div>
                          <div class="carousel-slide"><img src="/img/beachon2025/carrusel/4.jpg" /></div>
                          <div class="carousel-slide"><img src="/img/beachon2025/carrusel/5.jpg" /></div>
                          <div class="carousel-slide"><img src="/img/beachon2025/carrusel/6.jpg" /></div>
                        </div>
                        <button class="nav right" onclick="moveSlide(1)">&#10095;</button>
                      </div>
                </div>
                <div class="col-md-4 col-sm-12 m-auto">
                    <img src="{{asset('/img/beachon2025/calendario.svg')}}" class="img-fluid" alt="calendario">
                </div>
            </div>
            <div class="fechas__contenido boton-wrapper " id="boton-wrapper">
               <a href="https://docs.google.com/forms/d/e/1FAIpQLSdMUtUw8F-XTycdhScNvoqvRCNxbV-8-OkpMAiMoSFDU51zCw/viewform?usp=header" target="blank_" class="btn btn-primary inscribete boton-fijo" >INSCRÍBETE</a>
            </div>
        </div>
        <img src="{{asset('img/beachon2025/estrella.png')}}" class="img-fluid estrella" alt="estrella de mar">
        <div class="patrocinadores">
            <div class="container">
                <div class="patrocinadores__contenido text-center">
                    <img src="{{asset('img/beachon2025/logo-patrocinadores.svg')}}" width="320" alt="">
                    <div class="row">
                        <div class="col-md-4 col-md-12 m-auto">
                            <img src="{{asset('img/beachon2025/logo-limpiemos-yuc.svg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 col-md-12 m-auto">
                            <img src="{{asset('img/beachon2025/logo-bk-solid.svg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 col-md-12 m-auto">
                            <img src="{{asset('img/beachon2025/logo-uber-eats-vertical.svg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
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
/* counter */

/* abanico */

const merch = document.getElementById('merch');
    let activated = false;

    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return rect.top <= window.innerHeight && rect.bottom >= 0;
    }

    function onScroll() {
      if (!activated && isInViewport(merch)) {
        activated = true;
        merch.classList.add('show');
        window.removeEventListener('scroll', onScroll);
      }
    }

    window.addEventListener('scroll', onScroll);

/* abanico */
       let currentIndex = 0;
    const track = document.querySelector(".carousel-track");
    const slides = document.querySelectorAll(".carousel-slide");

    function updateSlides() {
      const slideWidth = slides[0].offsetWidth;
      track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

      slides.forEach(slide => slide.classList.remove("blur"));
      slides.forEach((slide, index) => {
        if (window.innerWidth > 768) {
          if (index !== currentIndex + 1) {
            slide.classList.add("blur");
          }
        } else {
          slide.classList.remove("blur");
        }
      });
    }

    function moveSlide(direction) {
      const maxIndex = slides.length - (window.innerWidth > 768 ? 3 : 1);
      currentIndex += direction;
      if (currentIndex < 0) currentIndex = 0;
      if (currentIndex > maxIndex) currentIndex = maxIndex;
      updateSlides();
    }

    window.addEventListener("load", updateSlides);
    window.addEventListener("resize", updateSlides);

    let startX = 0;
    let isDown = false;

    track.addEventListener("touchstart", e => {
      startX = e.touches[0].clientX;
      isDown = true;
    });

    track.addEventListener("touchmove", e => {
      if (!isDown) return;
      let moveX = e.touches[0].clientX;
      let diff = startX - moveX;
      if (Math.abs(diff) > 50) {
        moveSlide(diff > 0 ? 1 : -1);
        isDown = false;
      }
    });

    track.addEventListener("touchend", () => {
      isDown = false;
    });
      </script>
@endsection
