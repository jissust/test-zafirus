<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/700f23d8f8.css" media="all" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .text-justify{
                text-align: justify;
            }
        </style>

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/public/logo.jpg" class="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#presentation">
                            Presentación
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#specialties">
                            Especialidades
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services" tabindex="-1" aria-disabled="true">
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#sectors" tabindex="-1" aria-disabled="true">
                            Sectores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact" tabindex="-1" aria-disabled="true">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section id="slide">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="img/slide/1.jpg" class="d-block w-100" alt="img-slide-1">
                </div>
                <div class="carousel-item active">
                    <img src="img/slide/2.jpg" class="d-block w-100" alt="img-slide-2">
                </div>
                <div class="carousel-item">
                    <img src="img/slide/3.jpg" class="d-block w-100" alt="img-slide-3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">
                    Previous
                </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">
                    Next
                </span>
            </button>
        </div>
    </section>

    <section id="presentation" class="position-relative" style="overflow: hidden;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 py-5">
                    <h1 class="text-center pb-3">
                        Nuestros Productos
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

    <!--<section id="specialties" class="position-relative">
        <div class="row">
            <div class="col-sm-6">
                <h1>Información</h1>
            </div>
            <div class="col-sm-6">
                <h1>Contacto</h1>
            </div>

        </div>      
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <h1>Pan American Grain</h1>
                <div class="">
                    Una de las empresas agroindustriales más grandes del Caribe
                </div>
            </div>
        </div>  
    </footer>-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/700f23d8f8.js"></script>
    </body>
</html>
