<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductAsesorias - Servicios de Asesoría</title>
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
        <h1>ProductAsesorias - Servicios de Asesoría</h1>
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
            <!-- Información de Servicios de Asesoría -->
            <div class="col-md-6">
                <h2>Servicios de Asesoría de Alta Calidad</h2>
                <p>En Vidrios Y Aceros Sandra, ofrecemos una variedad de servicios de asesoría de alta calidad, incluyendo asesoría en vidrios y cristales, acero inoxidable, puertas y ventanas, baños y cocinas. Nuestros servicios destacan por su profesionalismo, eficiencia y atención al detalle, proporcionando soluciones completas y efectivas para tu hogar o negocio.</p>
                
                <div class="row">
                    <!-- Asesoría en Vidrios y Cristales -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/asesoria_vidrios.jpeg') }}" class="card-img-top" alt="Asesoría en Vidrios y Cristales">
                            <div class="card-body">
                                <h5 class="card-title">Asesoría en Vidrios y Cristales</h5>
                                <p class="card-text">Ofrecemos servicios de asesoría en selección, instalación y mantenimiento de vidrios y cristales.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Asesoría en Acero Inoxidable -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/asesoria_acero_inoxidable.jpeg') }}" class="card-img-top" alt="Asesoría en Acero Inoxidable">
                            <div class="card-body">
                                <h5 class="card-title">Asesoría en Acero Inoxidable</h5>
                                <p class="card-text">Nuestros servicios incluyen asesoría en selección y mantenimiento de superficies de acero inoxidable.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Asesoría en Puertas y Ventanas -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/asesoria_puertas_ventanas.jpeg') }}" class="card-img-top" alt="Asesoría en Puertas y Ventanas">
                            <div class="card-body">
                                <h5 class="card-title">Asesoría en Puertas y Ventanas</h5>
                                <p class="card-text">Ofrecemos servicios de asesoría en selección, instalación y mantenimiento de puertas y ventanas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Asesoría en Baños -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/asesoria_banos.jpeg') }}" class="card-img-top" alt="Asesoría en Baños">
                            <div class="card-body">
                                <h5 class="card-title">Asesoría en Baños</h5>
                                <p class="card-text">Nuestros servicios incluyen asesoría en selección y mantenimiento de accesorios de baño.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Asesoría en Cocinas -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/asesoria_cocinas.jpeg') }}" class="card-img-top" alt="Asesoría en Cocinas">
                            <div class="card-body">
                                <h5 class="card-title">Asesoría en Cocinas</h5>
                                <p class="card-text">Ofrecemos servicios de asesoría en diseño, selección y mantenimiento de cocinas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulario de Solicitud de Asesoría -->
            <div class="col-md-6">
                <h5>Solicita tu Servicio de Asesoría</h5>
                <form id="form-pedido">
                    <div class="form-group">
                        <label for="tipoAsesoria">Tipo de Asesoría</label>
                        <select class="form-control" id="tipoAsesoria" name="tipoAsesoria">
                            <option value="vidrios_cristales">Asesoría en Vidrios y Cristales</option>
                            <option value="acero_inoxidable">Asesoría en Acero Inoxidable</option>
                            <option value="puertas_ventanas">Asesoría en Puertas y Ventanas</option>
                            <option value="banos">Asesoría en Baños</option>
                            <option value="cocinas">Asesoría en Cocinas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del Servicio</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Describe brevemente el servicio que necesitas"></textarea>
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
