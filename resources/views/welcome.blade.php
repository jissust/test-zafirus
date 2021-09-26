<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Pan American Grain
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/700f23d8f8.css" media="all" rel="stylesheet">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                color: #fff;
            }
            .text-justify{
                text-align: justify;
            }
            .carousel-indicators button {
                width: 10px!important;
                height: 10px!important;
                border-radius: 50%;
            }
            #nuestros-productos{
                overflow: hidden; 
                background-image:url('img/nuestros-productos/fondo.png');  
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: cover;
            }
            #contacto{
                overflow: hidden; 
                background-image:url('img/contacto/fondo.png');  
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: cover;
            }
            footer{
                overflow: hidden; 
                background-image:url('img/footer/fondo.png');  
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: cover;
            }
            input{
                font-family:Arial, FontAwesome
            }
            hr{
                text-align: center;
                margin: 0 5%;
                height: 1px !important;
                color: #000;
                opacity: 1;
            }
            #nuestros-productos hr,
            nav hr{
                color: #fee600;
            }
            nav label{
                color: #00164d;
            }
        </style>
        <!-- 
            #00164d azul
            #fee600 amarillo
        -->
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/public/logo.png" class="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            Sobre nosotros
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu dropdown-menu text-end px-2" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <label class="pe-2">
                                    Consumo humano
                                </label>
                                <hr>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Arroz Rico
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gasolina Drink
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Wines & Spirits
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Café Mami
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Harina Rico
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Gasolina Energy Drink
                                </a>
                            </li>
                            <li>
                                <label class="pe-2">
                                    Productos Agrícolas
                                </label>
                                <hr>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Alimentos de animales
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Fertilizantes
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Otros productos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">
                            Investors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">
                            Responsability
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">
                            Careers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">
                            Leadership
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        
    <section id="slide">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex h-100 align-items-center justify-content-center">
                        <h1 class="">First slide label</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex h-100 align-items-center justify-content-center">
                        <h1>Second slide label</h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-flex h-100 align-items-center justify-content-center">
                        <div>
                            <h1>Third slide label</h1>
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
    <section id="nuestros-productos" class="position-relative" style="overflow: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 py-5">
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
                            <img src="img/presentation/300x200.png" class="img-fluid" alt="" />
                        </div>
                        <div class="col-sm-6 pb-3">
                            <img src="img/presentation/300x200.png" class="img-fluid" alt="" />
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
                        <p>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> Amelia Industrial Park, 9 Calle Claudia, Guaynabo 00969
                        </p>
                        <p>
                            <i class="fa fa-at" aria-hidden="true"></i> info@panamericangrain.com
                        </p>
                        <p>
                            <i class="fa fa-phone" aria-hidden="true"></i> 787-273-6100
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
                                <textarea class="form-control" name="" id="" style="resize: none" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="d-grid gap-2 pb-2">
                                <button class="btn btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>      
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 py-5 text-center">
                    <img src="img/public/logo.png" alt="" class="pb-3" />
                    <div class="pb-5">
                        Una de las empresas agroindustriales más grandes del Caribe
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="px-3">
                            <i class="fa fa-instagram" aria-hidden="true" style="font-size: 30px;"></i>
                        </div>
                        <div  class="px-3">
                            <i class="fa fa-youtube-play" aria-hidden="true" style="font-size: 30px;"></i>
                        </div>
                        <div  class="px-3">
                            <i class="fa fa-facebook" aria-hidden="true" style="font-size: 30px;"></i>
                        </div>
                    </div>

                </div>  
            </div>
        </div>  
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://use.fontawesome.com/700f23d8f8.js"></script>
    </body>
</html>
