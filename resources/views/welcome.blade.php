@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="row mx-auto mt-5 text-center">
                    <div class="col">
                        <h2 style="text-shadow: rgb(35, 231, 9) 1px 0 10px">Bienvenid@s a Tamales el Ingeniero</h2>
                    <img src="{{asset('img/tamales.jpg')}}" width="270px" class="img-fluid" alt="logo image">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <h3 class="text-white" style="text-shadow: 2px 2px 3px rgb(129, 5, 53)">Misión</h3>
                        <p class="font-weight-bold">Ser unos de las tiendas en linea que ponga en alto <br>
                        a El Salvador, ofreciendo a nuestros clientes variedad en tamales <br>
                        y con muy buena calidad, satisfaciendo e innovando para ofrecer <br>
                    a nuestros clientes el mejor de los servicios.</p>
                    </div>
                    <div class="col">
                        <h3 class="text-white" style="text-shadow: 2px 2px 3px rgb(129, 5, 53)">Visión</h3>
                        <p class="font-weight-bold">Deseamos el exito de cada uno de nuestros clientes y <br>
                        que estos siempre obtenga de nuestro sitio la mejor opcion <br>
                    en comida tradicional como lo son los tamales, crecer y tener muchas mas <br>
                sucursales dentro del pais, como fuera de el.</p>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.rappi.com/products/990006611-1489592088.png?d=128x90"
                                class="d-block w-100 img-fluid" alt="..." style="height: 600px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.tipicosmargoth.com/wp-content/uploads/2020/05/COMBO-TAMALERO-ELOTE-TIPICOS-MARGOTH.jpg"
                                class="d-block w-100 img-fluid" alt="..." style="height: 600px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://cropafresh.com/image/cache/catalog/Chuchito%20colorado/tamal%20navidad%201-500x500.jpg"
                                class="d-block w-100 img-fluid" alt="..." style="height: 600px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
