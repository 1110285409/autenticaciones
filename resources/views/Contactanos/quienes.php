<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - ProductAsesorias</title>
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
        .vision-mision {
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
        <h1>Quiénes Somos - ProductAsesorias</h1>
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
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Quiénes Somos</h2>
                        <p class="card-text">En Vidrios Y Aceros Sandra, nos dedicamos a ofrecer servicios de alta calidad en el área de vidrios y aceros. Con años de experiencia en el sector, nuestro compromiso es brindar soluciones efectivas y personalizadas a nuestros clientes, garantizando su satisfacción y confianza.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Visión -->
            <div class="col-md-6 mb-4">
                <div class="vision-mision">
                    <h3>Visión</h3>
                    <p>Nuestra visión es ser líderes en el mercado de servicios de vidrios y aceros, reconocidos por nuestra innovación, calidad y compromiso con el medio ambiente. Aspiramos a expandir nuestras operaciones a nivel nacional e internacional, estableciendo estándares de excelencia en cada proyecto que emprendemos.</p>
                </div>
            </div>
            <!-- Misión -->
            <div class="col-md-6 mb-4">
                <div class="vision-mision">
                    <h3>Misión</h3>
                    <p>Nuestra misión es proporcionar servicios de vidrios y aceros de la más alta calidad, adaptándonos a las necesidades específicas de cada cliente. Nos esforzamos por ofrecer soluciones sostenibles y eficientes, contribuyendo al desarrollo y bienestar de la comunidad y el entorno en el que operamos.</p>
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
