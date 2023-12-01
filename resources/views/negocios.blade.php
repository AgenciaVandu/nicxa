@extends('layouts.nicxa')
@push('title')
Negocios
@endpush
@section('content')
<header class="portada-franquicia">
    <div id="slider-franquicia" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <header class="negocios-portada">
                <video src="{{asset('/video/REEL_GRUPO NICXA_3.mp4')}}" width="100%" controls autoplay loop muted></video>
            </header>
          {{-- <div class="carousel-item">
            <img src="/img/portada-alimentos.jpg" class="d-block w-100" alt="Fotografía Hamburguesas">
          </div>
          <div class="carousel-item">
            <img src="/img/portada-alimentos.jpg" class="d-block w-100" alt="Fotografía Hamburguesas">
          </div> --}}
        </div>
      {{--  <button class="carousel-control-prev" type="button" data-target="#slider-franquicia" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#slider-franquicia" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button> --}}
    </div>
</header>

<div class="d-none d-sm-none d-md-block d-lg-block">
    <section class="negocios">
        <div class="bg-negocios footer__espacio">
            <div class="container-fluid">
                <div class="negocios__card">
                    <h2 class="pl-2">NEGOCIOS</h2>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <a href="/franquicia">
                                <div class="negocios__franquicia text-center">
                                    <!-- <img src="/img/ALIMENTOS-1.png" class="img-fluid" alt=""> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <a href="/responsabilidad-social">
                                <div class="negocios__fundacion text-center">
                                    <!-- <img src="/img/FUNDACIÓN-1.png" class="img-fluid" alt=""> -->
                                </div>
                               </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <a href="responsabilidad-social#inmobiliaria">
                                <div class="negocios__inmobiliaria text-center">
                                    <!-- <img src="/img/INMOBILIARIA-1.png" class="img-fluid" alt=""> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <a href="https://juegalabolita.com/" target="_blank">
                                <div class="negocios__unidad text-center">
                                    <!-- <img src="/img/INMOBILIARIA-1.png" class="img-fluid" alt=""> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           </div>
       </section>
    </div>
<section class="movil">
    <div class="d-block d-sm-block d-md-none d-lg-none">
        <div class="bg-negocios-1">
         <div class="container">
             <h1 style="color:#fff; text-align:center;" class="pt-4 pb-4">NEGOCIOS</h1>
             <div class="row">
                 <div class="col-12">
                     <a href="/franquicia">
                         <div class="negocios__franquicia text-center">
                             <!-- <img src="/img/ALIMENTOS-1.png" class="img-fluid" alt=""> -->
                         </div>
                     </a>
                 </div>
                 <div class="col-12 mt-3">
                     <a href="/responsabilidad-social">
                         <div class="negocios__fundacion text-center">
                             <!-- <img src="/img/FUNDACIÓN-1.png" class="img-fluid" alt=""> -->
                         </div>
                     </a>
                 </div>
                 <div class="col-12 mt-3 mb-4">
                     <a href="responsabilidad-social#inmobiliaria">
                         <div class="negocios__inmobiliaria text-center">
                             <!-- <img src="/img/INMOBILIARIA-1.png" class="img-fluid" alt=""> -->
                         </div>
                     </a>
                 </div>
                 <div class="col-12 mt-3 mb-4">
                    <a href="https://juegalabolita.com/" target="_blank">
                        <div class="negocios__unidad text-center">
                            <!-- <img src="/img/INMOBILIARIA-1.png" class="img-fluid" alt=""> -->
                        </div>
                    </a>
                </div>
             </div>
         </div>
        </div>
    </div>
</section>
@endsection