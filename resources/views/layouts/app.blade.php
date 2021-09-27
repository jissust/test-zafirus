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
        <link href="css/estilo.css" rel="stylesheet" >
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/public/logo.png" class="img-fluid">
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

        @yield('content')
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 py-5 text-center">
                        <img src="img/public/logo.png" alt="" class="pb-3 img-fluid""" />
                        <div class="pb-5">
                            Una de las empresas agroindustriales más grandes del Caribe
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="" class="px-3">
                                <i class="fa fa-instagram font30px" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="px-3">
                                <i class="fa fa-youtube-play font30px" aria-hidden="true"></i>
                            </a>
                            <a class="px-3">
                                <i class="fa fa-facebook font30px" aria-hidden="true"></i>
                            </a>
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
