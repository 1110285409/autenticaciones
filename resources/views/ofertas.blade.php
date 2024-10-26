<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas - Vidrios Y Aceros Sandra</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .carousel-caption h5,
        .carousel-caption p {
            color: rgb(255, 255, 255); /* Cambia el color del texto a negro */
        }

        .social-links a {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Ofertas Especiales</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Inicio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/nosotros">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categorias">Categorías</a></li>
                        <li class="nav-item"><a class="nav-link" href="/ofertas">Ofertas</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contactanos">Contáctanos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <h2>Nuestras Ofertas</h2>
        <div id="offerCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#offerCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#offerCarousel" data-slide-to="1"></li>
                <li data-target="#offerCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/oferta1.jpg') }}" class="d-block w-100" alt="Oferta 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Oferta 1</h5>
                        <p>¡Transforma tu espacio con nuestros servicios! Obtén un 10% de descuento en tu primer proyecto.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/oferta2.jpg') }}" class="d-block w-100" alt="Oferta 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Oferta 2</h5>
                        <p>Mantenimiento de verano: 15% de descuento en todos los servicios de mantenimiento de vidrios y aceros.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/oferta3.jpg') }}" class="d-block w-100" alt="Oferta 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Oferta 3</h5>
                        <p>Confía en los expertos: 5% de descuento en tu próxima instalación al mencionar este testimonio.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#offerCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#offerCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>© 2024 Vidrios Y Aceros Sandra</p>
            <div class="social-links">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="mt-3">
                <a href="/terminos" class="text-white mx-2">Términos y Condiciones</a>
                <a href="/politicas" class="text-white mx-2">Políticas de Seguridad</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
