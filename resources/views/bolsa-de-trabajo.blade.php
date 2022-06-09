@extends('layouts.nicxa')
@section('content')
    @push('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    @endpush
    <header class="bolsa-de-trabajo">
        <div class="container">
            <div class="m-0 row justify-content-center align-items-center">
                <div class="text-center bolsa-de-trabajo__center">
                    <h1 style="color: #fff;">Trabaja con los grandes <br> en Grupo Nicxa</h1>
                    <a href="#cta" class="btn btn-danger">ÚNETE AL EQUIPO</a>
                </div>
            </div>
        </div>
    </header>
    <section class="unete-a-nicxa pt-5 pb-4">
        <div class="container">
            <div class="text-center">
                <h2>Únete a la familia Nicxa</h2>
                <p class="acciones__texto">Grupo Nicxa esta comprometido en cuidar, brindar oportunidades y crecer junto a
                    sus colaboradores, porque sin ellos nada sería posible. Grupo Nicxa es el lugar donde desarrollar tu
                    carrera creando y viviendo experiencias únicas.
                    No importa si es tu primer empleo o buscas algo mejor. La oportunidad de crecimiento está aquí. Si
                    deseas incorporarte al equipo accede al formulario y elige el área más apegada a tus habilidades e
                    intereses. Registra tus datos y a la brevedad se comunicaran.</p>
            </div>
        </div>
    </section>
    <section class="cta" id="cta">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-7 col-md-6 col-sm-12 m-auto">
                    <h6 class="text-center cta__titulo">Conoce la trayectoria y crecimiento de algunos de nuestros
                        colaboradores</h6><!-- Carrusel -->
                    <div class="carousel">
                        <div class="carousel__contenedor mb-2">
                            <button aria-label="anterior" class="carousel__anterior-colab">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <div class="carousel__lista-colab">
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="cta__contenedor">
                                        <figure>
                                            <img src="{{ '/img/colaboradores/m-zapata.png' }}" alt="">
                                            <div class="cta__contenedor--capa">
                                                <h5>MARTHA ZAPATA</h5>
                                                <p>Lleva 29 años en la empresa, comenzando en el área de Operaciones de
                                                    restaurantes y actualmente ocupa una posición administrativa como
                                                    Coordinadora de retención de personal, ha tenido experiencia en las
                                                    marcas Burger King y Pizza Hut, a Gilda le encanta el trato al cliente
                                                    interno y externo y eso ha ocasionado que vaya creciendo con nosotros.
                                                </p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="cta__contenedor">
                                        <figure>
                                            <img src="{{ '/img/colaboradores/i-castillo.png' }}" alt="">
                                            <div class="cta__contenedor--capa">
                                                <h5>IRMA CASTILLO</h5>
                                                <p>Irma comenzó como Empleada General, después fue cajera, cocinera,
                                                    entrenadora, asistente de gerente, gerente de entrenamiento, gerente de
                                                    servicio a domicilio, gerente de zona y actualmente Gerente de
                                                    Operaciones de la marca KFC, lleva con nosotros desde el 26 de Mayo de
                                                    2005 teniendo un gran compromiso con la empresa y que vive los valores
                                                    de su marca y de Grupo Nicxa.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="cta__contenedor">
                                        <figure>
                                            <img src="{{ '/img/colaboradores/j-sales.png' }}" alt="">
                                            <div class="cta__contenedor--capa">
                                                <h5>JOSUÉ SALES</h5>
                                                <p>Josué ingresó con nosotros el 21 de Febrero de 2002 comenzó su carrera
                                                    con nosotros en la parte operativa en donde fue creciendo hasta llegar a
                                                    ser Gerente de entrenamiento de la marca Burger King, actualmente Josué
                                                    tuvo oportunidad de cambiarse al área administrativa comenzando como
                                                    Jefe de Capacitación y actualmente ocupa la posición de Gerente de
                                                    Capacitación de Grupo Nicxa, demostrando sus ganas de crecer.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="cta__contenedor">
                                        <figure>
                                            <img src="{{ '/img/colaboradores/m-castro.png' }}" alt="">
                                            <div class="cta__contenedor--capa">
                                                <h5>MANUEL CASTRO</h5>
                                                <p>Lleva 29 años en la empresa, específicamente en la marca Burger King,
                                                    ingresó el 26 de Junio de 1992 a la organización, en donde fue creciendo
                                                    desde Empleado General hasta ser actualmente el Gerente de entrenamiento
                                                    de la marca para la zona Mérida, a lo largo de estos años ha demostrado
                                                    su compromiso y lealtad con la organización.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="cta__contenedor">
                                        <figure>
                                            <img src="{{ '/img/colaboradores/j-ongay.png' }}" alt="">
                                            <div class="cta__contenedor--capa">
                                                <h5>JORGE ONGAY</h5>
                                                <p>Iván ingresó con nosotros desde el 21 de Septiembre del 2009, él ha
                                                    demostrado que con su esfuerzo y perseverancia se logran resultados
                                                    extraordinarios, comenzó su carrera en el departamento de Mercadotecnia
                                                    como Director, decidió cambiarse al lado operativo y estuvo como
                                                    Director de la marca KFC y actualmente como Director de la marca Burger
                                                    King.</p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="cta__contenedor">
                                        <figure>
                                            <img src="{{ '/img/colaboradores/r-cetina.png' }}" alt="">
                                            <div class="cta__contenedor--capa">
                                                <h5>REBECA CETINA</h5>
                                                <p>Rebeca ingresó con nosotros el 23 de Enero de 2007, comenzando como
                                                    Mesera de la marca Los Bisquets Obregón, actualmente ocupa la posición
                                                    de Jefe de Unidad en dicha marca, demostrando su crecimiento y fidelidad
                                                    con la empresa, así como sus ganas de crecer laboral y personalmente.
                                                </p>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <button aria-label="siguiente" class="carousel__siguiente-colab">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <div role="tablist" class="carousel__indicadores-colab"></div>
                        </div>

                    </div>
                    <!-- end-carrusel -->
                    <h6 class="text-center cta__titulo">Beneficios de trabajar con nosotros</h6>
                    <div class="carousel">
                        <div class="carousel__contenedor mb-2">
                            <button aria-label="anterior" class="carousel__anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <div class="carousel__lista">
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/1.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/2.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/3.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/4.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/5.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/6.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/7.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/8.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/9.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/10.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/11.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/12.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>
                                <div class="carousel__elemento">
                                    <!--Elemento a-->
                                    <div class="text-center m-auto">
                                        <figure>
                                            <img src="{{ asset('/img/beneficios/13.svg') }}" alt="Caso de éxito"
                                                class="img-60">
                                        </figure>
                                    </div>
                                </div>

                            </div>
                            <button aria-label="siguiente" class="carousel__siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                            <div role="tablist" class="carousel__indicadores"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 m-auto">
                    <form id="formulario">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="email">Correo</label>
                                <input type="email" id="email" class="form-control" placeholder="hola@correo.com">
                            </div>
                            <div class="col">
                                <label for="phone">Teléfono</label>
                                <input type="tel" id="phone" class="form-control">
                            </div>
                        </div>
                        <input type="hidden" value="Landing Page" name="canal" />
                        <div class="row mt-4">
                            <div class="col">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" id="estado">
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Tabasco">Tabasco</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-4" id="ciudad">
                            <input type="hidden" value="indefinido" name="ciudad" />
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <label for="marca" class="m-auto pr-3">Marca</label>
                                <select class="form-control" name="franquicia" id="franquicia">
                                    <option value="Pizza Hut">Pizza Hut</option>
                                    <option value="KFC">KFC</option>
                                    <option value="LBB Obregon">LBB Obregon</option>
                                    <option value="Burgerking">Burgerking</option>
                                </select>
                            </div>
                            <div class="col-12 mt-4">
                                <label for="puesto" class="m-auto pr-3">Puesto</label>
                                <select class="form-control" id="puesto">
                                    <option>Empleado General (Asociado)</option>
                                    <option>Repartidor</option>
                                    <option>Cocinero</option>
                                    <option>Restaurantes - Piso (servicio)</option>
                                    <option>Restaurantes - Cocina</option>
                                    <option>Restaurantes - Gerente</option>
                                    <option>Corporativo - Adaministración</option>
                                    <option>Corporativo - Ejecutivo / Gerencial</option>
                                    <option>Prácticas Profesionales</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <div class="row">
                                <div class="col-3 m-auto">
                                    <label for="curriculum">Cargar CV</label>
                                </div>
                                <div class="col-9 m-auto">
                                    <input type="file" class="custom-file-upload btn-block" id="curriculum">
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Postularme" class="btn btn-primary btn-block"></input>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="container pt-5 pb-5">
            <h2 class="text-center">¡Haz carrera con nosotros! <br> <span
                    style="font-weight:400; color: #EB0028;">Partners</span></h2>
            <div class="glider-contain">
                <div class="glider ">
                    <div class="text-center m-auto">
                        <div class="text-center">
                            <img src="{{ asset('/img/logos/partners/1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text-center m-auto">
                        <div class="text-center">
                            <img src="{{ asset('/img/logos/partners/2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text-center m-auto">
                        <div class="text-center">
                            <img src="{{ asset('/img/logos/partners/3.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text-center m-auto">
                        <div class="text-center">
                            <img src="{{ asset('/img/logos/partners/4.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text-center m-auto">
                        <div class="text-center">
                            <img src="{{ asset('/img/logos/partners/5.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text-center m-auto">
                        <div class="text-center">
                            <img src="{{ asset('/img/logos/partners/6.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="/js/partners.js"></script>
    <script src="{{asset('assets/app.js')}}"></script>
@endpush
