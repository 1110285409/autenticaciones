<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductAceros - Ventanas y Accesorios de Acero Inoxidable</title>
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
        <h1>ProductAceros - Ventanas y Accesorios de Acero Inoxidable</h1>
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
            <!-- Información de Ventanas y Accesorios de Acero Inoxidable -->
            <div class="col-md-6">
                <h2>Ventanas y Accesorios de Acero Inoxidable</h2>
                <p>En Vidrios Y Aceros Sandra, ofrecemos una variedad de divisiones de ventana y accesorios de acero inoxidable de alta calidad, incluyendo divisiones de ventana, deslizadores de vidrio, y accesorios para barandales. Nuestros productos destacan por su durabilidad, resistencia a la corrosión y estética moderna, proporcionando soluciones elegantes y funcionales para tu hogar o negocio.</p>
                
                <div class="row">
                    <!-- División de Ventana en Acero Inoxidable -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/division_ventana_acero_inoxidable.jpeg') }}" class="card-img-top" alt="División de Ventana en Acero Inoxidable">
                            <div class="card-body">
                                <h5 class="card-title">División de Ventana en Acero Inoxidable</h5>
                                <p class="card-text">Nuestras divisiones de ventana en acero inoxidable ofrecen una solución duradera y estética para cualquier tipo de ventana.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Deslizador de Vidrio en Acero Inoxidable -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/deslizador_vidrio_acero_inoxidable.jpeg') }}" class="card-img-top" alt="Deslizador de Vidrio en Acero Inoxidable">
                            <div class="card-body">
                                <h5 class="card-title">Deslizador de Vidrio en Acero Inoxidable</h5>
                                <p class="card-text">Nuestros deslizadores de vidrio en acero inoxidable combinan funcionalidad y estilo, proporcionando una solución resistente y estética para cualquier ventana.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accesorios para Barandal de Acero Inoxidable -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/accesorios_barandal_acero_inoxidable.jpeg') }}" class="card-img-top" alt="Accesorios para Barandal de Acero Inoxidable">
                            <div class="card-body">
                                <h5 class="card-title">Accesorios para Barandal de Acero Inoxidable</h5>
                                <p class="card-text">Nuestros accesorios para barandal de acero inoxidable ofrecen una solución segura y duradera para cualquier tipo de barandal, combinando resistencia y estética moderna.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accesorios para Barandal de Acero Inoxidable -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/accesorios_barandal_acero_inoxidable_2.jpeg') }}" class="card-img-top" alt="Accesorios para Barandal de Acero Inoxidable">
                            <div class="card-body">
                                <h5 class="card-title">Accesorios para Barandal de Acero Inoxidable</h5>
                                <p class="card-text">Nuestros accesorios para barandal de acero inoxidable ofrecen una solución segura y duradera para cualquier tipo de barandal, combinando resistencia y estética moderna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulario de Pedido -->
            <div class="col-md-6">
                <h5>Solicita tu Producto de Acero Inoxidable</h5>
                <form id="form-pedido">
                    <div class="form-group">
                        <label for="tipoProducto">Tipo de Producto</label>
                        <select class="form-control" id="tipoProducto" name="tipoProducto">
                            <option value="division_ventana">División de Ventana en Acero Inoxidable</option>
                            <option value="deslizador_vidrio">Deslizador de Vidrio en Acero Inoxidable</option>
                            <option value="accesorios_barandal">Accesorios para Barandal de Acero Inoxidable</option>
                            <option value="accesorios_barandal_2">Accesorios para Barandal de Acero Inoxidable</option>
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
