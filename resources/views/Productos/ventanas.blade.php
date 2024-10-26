<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductVidrios - Ventanas de Vidrio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .header, .footer {
            background-color: #343a40;
            color: white;
        }
        .header h1, .footer p {
            margin: 0;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .form-control {
            border-radius: 10px;
        }
        .form-group label {
            font-weight: bold;
        }
        .social-links a {
            font-size: 1.5em;
        }
        .testimonial {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <header class="header text-center py-3">
        <h1>ProductVidrios - Ventanas de Vidrio</h1>
        <nav class="navbar navbar-expand-lg navbar-dark">
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
        <div class="row">
            <!-- Información de Ventanas de Vidrio -->
            <div class="col-md-6">
                <h2>Ventanas de Vidrio de Alta Calidad</h2>
                <p>En Vidrios Y Aceros Sandra, ofrecemos una variedad de ventanas de vidrio de alta calidad, incluyendo ventanas en aluminio para baños, ventanas fijas con vidrio opalizado y persiana fija superior, y ventanas en aluminio. Nuestros productos destacan por su durabilidad, claridad y resistencia, proporcionando soluciones elegantes y funcionales para tu hogar.</p>
                
                <div class="row">
                    <!-- Ventanas en Aluminio para Baños -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/ventana_aluminio_bano.jpeg') }}" class="card-img-top" alt="Ventanas en Aluminio para Baños">
                            <div class="card-body">
                                <h5 class="card-title">Ventanas en Aluminio para Baños</h5>
                                <p class="card-text">Nuestras ventanas en aluminio para baños combinan la resistencia del aluminio con la elegancia del vidrio, proporcionando una solución duradera y estética para tu baño.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Ventanas Fijas con Vidrio Opalizado y Persiana Fija Superior -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/ventana_vidrio_opalizado.jpeg') }}" class="card-img-top" alt="Ventanas Fijas con Vidrio Opalizado y Persiana Fija Superior">
                            <div class="card-body">
                                <h5 class="card-title">Ventanas Fijas con Vidrio Opalizado y Persiana Fija Superior</h5>
                                <p class="card-text">Nuestras ventanas fijas con vidrio opalizado y persiana fija superior ofrecen privacidad y control de la luz, ideales para cualquier espacio que requiera una solución elegante y funcional.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Ventanas en Aluminio -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/ventana_aluminio.jpeg') }}" class="card-img-top" alt="Ventanas en Aluminio">
                            <div class="card-body">
                                <h5 class="card-title">Ventanas en Aluminio</h5>
                                <p class="card-text">Nuestras ventanas en aluminio son conocidas por su durabilidad y resistencia, proporcionando una solución moderna y estética para cualquier espacio.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Ventanas en Aluminio para el Hogar -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/ventana_aluminio_hogar.jpeg') }}" class="card-img-top" alt="Ventanas en Aluminio para el Hogar">
                            <div class="card-body">
                                <h5 class="card-title">Ventanas en Aluminio para el Hogar</h5>
                                <p class="card-text">Nuestras ventanas en aluminio para el hogar ofrecen una solución duradera y estética, ideales para cualquier espacio de tu casa.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulario de Pedido -->
            <div class="col-md-6">
                <h5>Solicita tu Ventana de Vidrio</h5>
                <form id="form-pedido">
                    <div class="form-group">
                        <label for="tipoVentana">Tipo de Ventana</label>
                        <select class="form-control" id="tipoVentana" name="tipoVentana">
                            <option value="aluminio_bano">Ventana en Aluminio para Baños</option>
                            <option value="vidrio_opalizado">Ventana Fija con Vidrio Opalizado y Persiana Fija Superior</option>
                            <option value="aluminio">Ventana en Aluminio</option>
                            <option value="aluminio_hogar">Ventana en Aluminio para el Hogar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medidas">Medidas (Ancho x Alto)</label>
                        <input type="text" class="form-control" id="medidas" name="medidas" placeholder="Ej. 100cm x 200cm">
                    </div>
                    <div class="form-group">
                        <label for="color">Color de Accesorios</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Ej. Negro, Plateado">
                    </div>
                    <div class="form-group">
                        <label for="envio">Dirección de Envío</label>
                        <input type="text" class="form-control" id="envio" name="envio" placeholder="Tu dirección">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="tuemail@ejemplo.com">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="addToCart()">Añadir al Carrito</button>
                </form>
                <div class="mt-4">
                    <h5>Carrito de Compras</h5>
                    <ul class="list-group" id="carrito">
                        <!-- Aquí se mostrarán los productos añadidos al carrito -->
                    </ul>
                    <button class="btn btn-success mt-3">Proceder al Pago</button>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer text-center py-3">
        <div class="container">
            <footer class="footer text-center py-3">
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