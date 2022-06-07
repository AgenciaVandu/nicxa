@include('app.header')

<body>
    @include('app.nav')


    <!-- DESCARGAR CUPON -->


    <div class="container">
        <div class="row cupon_container py-5" id="contenedor">
            <div class="col-md-6">
                <div class="content-cupon-descargar">
                    <h3 class="mt-5 variant-title">
                        ¡Felicidades!
                    </h3>
                    @isset($datos)
                    <h1>
                        {{$datos['nombre']}}
                    </h1>
                    @endisset
                    @empty($datos)
                    <h1>
                        Nombre del Cliente
                    </h1>
                    @endempty

                    <p class="subtext">
                        Ya puedes <span class="variant-title">canjear tu cupón</span>
                        <br>
                        Aplican restricciones.
                    </p>
                    <p class="subtext">
                        Canjea tu cupón presentándolo en 
                        <br>
                        tu establecimiento <span class="variant-title">más cercano.</span>
                    </p>
                    <img class="marcas" src="{{url('marcas.png')}}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-6">
                @isset($datos)
                <a href="{{$datos['url']}}">
                    <img class="cupones d-block mx-auto mt-3" src="{{$datos['url']}}" alt="" srcset="" width="300px" height="auto" download>
                </a>
                @endisset
                @isset($datos)
                <a href="{{$datos['url']}}" class="mt-5 mb-5 button-descargar-c mx-auto d-block" download>
                    Descargar tu cupon
                </a>
                @endisset
            </div>
        </div>
    </div>

    <div id="contenedorCanvas" style="display: none;">
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script src="{{url('js/html2canvas.js')}}"></script>
    <script src="{{url('js/html2canvas.min.js')}}"></script>
    <script>
        const $boton = document.querySelector("#btnCapturar"), // El botón que desencadena
            $objetivo = document.querySelector("#contenedor"), // A qué le tomamos la foto
            $contenedorCanvas = document.querySelector("#contenedorCanvas"); // En dónde ponemos el elemento canvas

        // Agregar el listener al botón
        $boton.addEventListener("click", () => {
            html2canvas($objetivo) // Llamar a html2canvas y pasarle el elemento
                .then(canvas => {
                    // Cuando se resuelva la promesa traerá el canvas
                    $contenedorCanvas.appendChild(canvas);
                    let enlace = document.createElement('a');
                    enlace.download = "Cupon.png";
                    // Convertir la imagen a Base64
                    enlace.href = canvas.toDataURL();
                    // Hacer click en él
                    enlace.click(); // Lo agregamos como hijo del div
                });
        });
    </script>
</body>

@include('app.footer')