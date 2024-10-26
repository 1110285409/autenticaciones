<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - ProductAsesorias</title>
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
            margin: 0 10px;
        }
        .faq {
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
        <h1>Ayuda - ProductAsesorias</h1>
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
            <!-- Te Llamamos -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Te Llamamos</h5>
                        <p class="card-text">Déjanos tu número y te llamaremos para asistirte con cualquier consulta o servicio que necesites.</p>
                        <form>
                            <div class="form-group">
                                <label for="telefono">Número de Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" placeholder="Tu número de teléfono">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Redes Sociales -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Síguenos en Redes Sociales</h5>
                        <p class="card-text">Mantente al día con nuestras últimas noticias y ofertas.</p>
                        <div class="social-links">
                            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Contáctanos -->
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contáctanos</h5>
                        <p class="card-text">Estamos aquí para ayudarte. Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
                        <form>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="tuemail@ejemplo.com">
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="3" placeholder="Tu mensaje"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Preguntas Frecuentes -->
            <div class="col-md-12 mb-4">
                <div class="faq">
                    <h5>Preguntas Frecuentes</h5>
                    <div class="accordion" id="faqAccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ¿Cómo puedo solicitar un servicio?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Puedes solicitar un servicio a través de nuestro formulario en línea o llamándonos directamente.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ¿Cuáles son los métodos de pago aceptados?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Aceptamos pagos con tarjeta de crédito, débito y transferencias bancarias.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Ofrecen servicios de emergencia?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                <div class="card-body">
                                    Sí, ofrecemos servicios de emergencia 24/7. Contáctanos para más detalles.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer text-center py-3">
        <div class="container">
            <p>© 2024 Vidrios Y Aceros Sandra. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
