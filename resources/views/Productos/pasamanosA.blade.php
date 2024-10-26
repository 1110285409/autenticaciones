<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductAceros - Pasamanos y Barandillas</title>
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
        <h1>ProductAceros - Pasamanos y Barandillas</h1>
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
            <!-- Información de Pasamanos y Barandillas -->
            <div class="col-md-6">
                <h2>Pasamanos y Barandillas de Alta Calidad</h2>
                <p>En Vidrios Y Aceros Sandra, ofrecemos una variedad de pasamanos y barandillas de alta calidad, incluyendo pasamanos de acero inoxidable, productos de Aceros Inoxidable Tenerife, pasamanos en acero y barandillas de hierro. Nuestros productos destacan por su durabilidad, resistencia a la corrosión y estética moderna, proporcionando soluciones elegantes y funcionales para tu hogar o negocio.</p>
                
                <div class="row">
                    <!-- Pasamanos de Acero Inoxidable -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/pasamanos_acero_inoxidable.jpeg') }}" class="card-img-top" alt="Pasamanos de Acero Inoxidable">
                            <div class="card-body">
                                <h5 class="card-title">Pasamanos de Acero Inoxidable</h5>
                                <p class="card-text">Nuestros pasamanos de acero inoxidable ofrecen una solución duradera y estética para cualquier tipo de escalera o pasillo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Aceros Inoxidable Tenerife -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/aceros_inoxidable_tenerife.jpeg') }}" class="card-img-top" alt="Aceros Inoxidable Tenerife">
                            <div class="card-body">
                                <h5 class="card-title">Aceros Inoxidable Tenerife</h5>
                                <p class="card-text">Nuestros productos de Aceros Inoxidable Tenerife combinan funcionalidad y estilo, proporcionando una solución resistente y estética para cualquier espacio.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Pasamanos en Acero -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/pasamanos_acero.jpeg') }}" class="card-img-top" alt="Pasamanos en Acero">
                            <div class="card-body">
                                <h5 class="card-title">Pasamanos en Acero</h5>
                                <p class="card-text">Nuestros pasamanos en acero ofrecen una solución segura y duradera para cualquier tipo de escalera o pasillo, combinando resistencia y estética moderna.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Barandilla de Hierro con Pasamanos -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/barandilla_hierro_pasamanos.jpeg') }}" class="card-img-top" alt="Barandilla de Hierro con Pasamanos">
                            <div class="card-body">
                                <h5 class="card-title">Barandilla de Hierro con Pasamanos</h5>
                                <p class="card-text">Nuestras barandillas de hierro con pasamanos ofrecen una solución elegante y funcional, ideales para cualquier tipo de escalera o balcón.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulario de Pedido -->
            <div class="col-md-6">
                <h5>Solicita tu Pasamanos o Barandilla</h5>
                <form id="form-pedido">
                    <div class="form-group">
                        <label for="tipoProducto">Tipo de Producto</label>
                        <select class="form-control" id="tipoProducto" name="tipoProducto">
                            <option value="pasamanos_acero_inoxidable">Pasamanos de Acero Inoxidable</option>
                            <option value="aceros_inoxidable_tenerife">Aceros Inoxidable Tenerife</option>
                            <option value="pasamanos_acero">Pasamanos en Acero</option>
                            <option value="barandilla_hierro_pasamanos">Barandilla de Hierro con Pasamanos</option>
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