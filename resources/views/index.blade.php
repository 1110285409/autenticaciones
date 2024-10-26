<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidrios Y Aceros Sandra - Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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

        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            border-radius: 0.3rem;
        }

        .social-links a {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Panel de Administración</h1>
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
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pedidos.index') }}">
                                <span data-feather="file"></span>
                                Pedidos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('productos.index') }}">
                                <span data-feather="shopping-cart"></span>
                                Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.index') }}">
                                <span data-feather="users"></span>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reportes.index') }}">
                                <span data-feather="bar-chart-2"></span>
                                Reportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('integraciones.index') }}">
                                <span data-feather="layers"></span>
                                Integraciones
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Vidrios Y Aceros Sandra</h1>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Resumen de Ventas
                            </div>
                            <div class="card-body">
                                <canvas id="salesChart" aria-label="Gráfico de resumen de ventas" role="img"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Notificaciones
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Nuevo pedido recibido</li>
                                    <li class="list-group-item">Stock bajo en productos</li>
                                    <li class="list-group-item">Nuevo mensaje de contacto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <section class="testimonials mt-5">
                    <div class="container">
                        <h2>Testimonios</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <blockquote class="blockquote">
                                    <p class="mb-0">Excelente servicio y productos de alta calidad.</p>
                                    <footer class="blockquote-footer">Juan Pérez</footer>
                                </blockquote>
                            </div>
                            <div class="col-md-4">
                                <blockquote class="blockquote">
                                    <p class="mb-0">Muy satisfecho con la atención recibida.</p>
                                    <footer class="blockquote-footer">Ana Gómez</footer>
                                </blockquote>
                            </div>
                            <div class="col-md-4">
                                <blockquote class="blockquote">
                                    <p class="mb-0">Recomiendo totalmente esta empresa.</p>
                                    <footer class="blockquote-footer">Carlos López</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact mt-5">
                    <div class="container">
                        <h2>Contáctanos</h2>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="contactForm" method="POST" action="/contact">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required minlength="3">
                                <div class="invalid-feedback">Por favor, ingresa tu nombre (mínimo 3 caracteres).</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</div>
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required minlength="10"></textarea>
                                <div class="invalid-feedback">Por favor, ingresa un mensaje (mínimo 10 caracteres).</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                        <div class="mt-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.9537353153167!3d-37.81627917975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d9f0b1a0b1a1!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1611815471234!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" aria-label="Mapa de ubicación de Federation Square"></iframe>
                        </div>
                    </div>
                </section>