@extends('layouts.app')
@section('content')
    <section id="slide">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide/1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex flex-md-column h-100 align-items-center justify-content-center">
                        <h1 class="">
                            Producto uno
                        </h1>
                        <a href="#" class="btn btn-blue">
                            Ver productos
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide/2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex flex-md-column h-100 align-items-center justify-content-center">
                        <h1>
                            Producto dos
                        </h1>
                        <a href="#" class="btn btn-blue">
                            Ver productos
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide/3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex flex-md-column h-100 align-items-center justify-content-center">
                        <div>
                            <h1>
                                Producto tres
                            </h1>
                            <a href="#" class="btn btn-blue">
                                Ver productos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="nuestros-productos" class="position-relative overFlowHidden">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 py-5">
                    <h1 class="text-center pb-3">
                        <label for="">
                            Nuestros Productos
                            <hr>
                        </label>
                    </h1>    
                    <p class="text-justify pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas acacumsan lacus vel facilisis. Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusamod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus
                    </p>
                    <div class="row pb-5">
                        <div class="col-sm-6 pb-3">
                            <div class="nuestros-productos__img_container">
                                <img src="img/nuestros-productos/1.jpg" class="img-fluid w-100" alt="" />
                                <div class="nuestros-productos__img_description_container_dark">

                                </div>
                                <div class="nuestros-productos__img_description_container d-flex flex-column">
                                    <p class="nuestros-productos__img_description p-0 m-0">
                                        Consumo Humano
                                    </p>
                                    <div class="line_yellow"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 pb-3">
                            <div class="nuestros-productos__img_container">
                                <img src="img/nuestros-productos/1.jpg" class="img-fluid w-100" alt="" />
                                <div class="nuestros-productos__img_description_container_dark">

                                </div>
                                <div class="nuestros-productos__img_description_container d-flex flex-column">
                                    <p class="nuestros-productos__img_description">
                                        Consumo Humano
                                    </p>
                                    <div  class="line_yellow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto" class="position-relative text-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-6 offset-sm-4">
                        <h1>
                            <label>
                                Información
                                <hr>
                            </label>
                        </h1>
                        <p class="d-flex">
                            <i class="fa fa-map-marker iconos_blue" aria-hidden="true"></i> 
                            <span class="ps-3">
                                Amelia Industrial Park, 9 Calle Claudia, Guaynabo 00969
                            </span>
                        </p>
                        <p>
                            <i class="fa fa-at iconos_blue" aria-hidden="true"></i> 
                            <span class="ps-2">
                                info@panamericangrain.com
                            </span>
                        </p>
                        <p>
                            <i class="fa fa-phone iconos_blue" aria-hidden="true"></i> 
                            <span class="ps-2">
                                787-273-6100
                            </span>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-7">
                        <h1>
                            <label>
                                Contacto
                                <hr>
                            </label>
                        </h1>
                        <form action="">
                            <div class="form-group pb-2">
                                <input type="text" name="nombre" class="form-control" placeholder="&#xf2c0; Nombre">
                            </div>
                            <div class="form-group pb-2">
                                <input type="text" name="email" class="form-control" placeholder="&#xf003; Email">
                            </div>
                            <div class="form-group pb-2">
                                <textarea class="form-control resizeNone" name="" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="d-grid gap-2 pb-2">
                                <button class="btn btn-blue">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </section>
@endsection