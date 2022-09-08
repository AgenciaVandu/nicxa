<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTHZP14R8R"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZTHZP14R8R');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#EB0028">
    <title>Grupo Nicxa - Nuestra meta eres tú</title>
    <meta name="facebook-domain-verification" content="vp8t49mojkkhq2a11x7x5la1noduv8" />
    <meta name="google-site-verification" content="q61Lt_yavm_0AcKrsM5i_85AaX7U7w9-hACnBVtjVH8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    @stack('css')
    <link rel="stylesheet" href="{{asset('/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    {{-- <link rel="stylesheet" href="/main.css"> --}}
    <script src="/js/scrollreveal.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9111dc1fca.js" crossorigin="anonymous"></script>
        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '374537884510729');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=374537884510729&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
</head>
<body>
    <div class="fixed-top">
        <nav class="navbar navbar-dark bg-nicxa">
         <div class="container">
            <a class="navbar-brand" href="/">
            <img src="{{asset('/img/logo-nicxa.svg')}}" width="155" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="menu col-12 text-right m-auto" style="font-family: Raleway; font-weight:600; color:#fff; font-size:.7em;">
                    <span>Menú</span>
                </div>
                  <!-- <div class="col-3">
                    <span class="navbar-toggler-icon" style="color: #fff;"></span>
                  </div> -->
            </button>
         </div>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <div class="container">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/negocios">Negocios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/franquicia">- Franquicia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/responsabilidad-social">- Responsabilidad social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/responsabilidad-social#inmobiliaria">- Inmobiliaria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/unete-a-la-famila-nicxa">Únete a la familia Nicxa <br class="d-block d-sm-block-d-md-none d-lg-none"> <span class="vacantes">¡Vacantes disponibles!</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://facturacion.gruponicxa.com.mx:8081/facturacioncliente/" target="_blank">Facturación</a>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
          <div class="footer__espacio">
              <div class="container-fluid">
                  <div class="row">
                          <div class="col-lg-3 col-md-12 col-sm-12 m-auto text-center pt-3 orden">
                              <figure>
                                  <img src="{{asset('/img/marcas-footer-1.svg')}}" width="270" alt="">
                              </figure> <br>
                          </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 orden-2">
                          <h6 style="font-weight: 800;" class="pt-3 pb-2">Menú del sitio</h6>
                          <div class="row">
                              <div class="col-4">
                                  <li>
                                      <a href="/">
                                          Home
                                      </a>
                                  </li>
                                  <li>
                                      <a href="/negocios">
                                          Negocios
                                      </a>
                                  </li>
                                  <li>
                                      <a href="/franquicia">
                                          Franquicia
                                      </a>
                                  </li>
                                  <li>
                                      <a href="/responsabilidad-social">
                                          Responsabildad social
                                      </a>
                                  </li>
                              </div>
                              <div class="col-8">
                                  <li>
                                      <a href="/responsabilidad-social#inmobiliaria">
                                          Inmobiliaria
                                      </a>
                                  </li>
                                  <li>
                                      <a href="/unete-a-la-famila-nicxa">Únete a la familia Nicxa</a>
                                  </li>
                                  <li>
                                      <a href="http://facturacion.gruponicxa.com.mx:8081/facturacioncliente/" target="_blank">
                                          Facturación
                                      </a>
                                  </li>
                              </div>
                              <div class="col-8 mt-2" style="font-weight: 700;">
                                  <li><a href="/download/Aviso-de-Privacidad-2022.pdf" target="_blank">Aviso de privacidad</a></li>
                                  <li>
                                      <img src="/img/top-companies.jpg" class="img-fluid" alt="Logotipo super empresas expansión">
                                  </li>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 orden-3"> <br class="d-block d-sm-block-d-md-none d-lg-none">
                          <h6 style="font-weight: 800;" class="pb-2">Ubica tu sucursal más cercana</h6>
                          <iframe src="https://www.google.com/maps/d/embed?mid=1IEhr-x0KGqmeM5H-UqXwwqSUK-hyO7bI&ehbc=2E312F" width="100%" height="280"></iframe>
                      </div>
                      <div class="col-lg-3 col-md-12 col-sm-12 orden-4"> <br class="d-block d-sm-block-d-md-none d-lg-none">
                          <h6 style="font-weight: 800;" class="pb-2">Contacto oficina corporativa</h6>
                          <div class="row">
                              <div class="col-3">
                                  <li>Teléfono:</li>
                                  <li>email:</li>
                                  <li>Oficinas:</li>

                              </div>
                              <div class="col-9">
                                  <li>(999) 930 1830</li>
                                  <li>comunicxa@gruponicxa.com.mx </li>
                                  <li>Calle 59 Dpto. A x 32 y 32
                                      A No. 253 Col. San Ramón Norte
                                      CP. 97117</li>
                                  <li>
                                      <span class="pr-2">
                                          <a href="https://www.facebook.com/GrupoNicxa/" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                          </a>
                                      </span>
                                      <span class="pr-2">
                                         <a href="https://www.instagram.com/gruponicxaoficial/" target="_blank">
                                              <i class="fa-brands fa-instagram"></i>
                                         </a>
                                      </span>
                                      <span class="pr-2">
                                          <a href="https://www.linkedin.com/company/grupo-nicxa/mycompany/" target="_blank">
                                            <i class="fa-brands fa-linkedin"></i>
                                          </a>
                                      </span>
                                      <span>
                                          <a href="https://www.youtube.com/channel/UCrjOx7RZNI2D8IakUsBo42A" target="_blank">
                                            <i class="fa-brands fa-youtube"></i>
                                          </a>
                                      </span>
                                  </li>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
             </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    @stack('scripts')
    <script src="{{asset('app.js')}}"></script>
</body>
</html>
