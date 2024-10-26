<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceros - Vidrios Y Aceros Sandra</title>
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

        .card {
            margin-bottom: 30px;
        }

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .social-links a {
            font-size: 1.5rem;
        }

        .disabled .card-body {
            background-color: #f8d7da;
        }

        .btn-disable {
            background-color: #dc3545;
            color: white;
        }

        .btn-disable.enabled {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Aceros</h1>
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
        <h2>Nuestras Categorías</h2>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addEditModal">Añadir Categoría</button>
        <div class="row" id="categories">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/puertas.jpeg') }}" class="card-img-top" alt="Puertas">
                    <div class="card-body">
                        <h5 class="card-title">Puertas</h5>
                        <p class="card-text">Puertas de acero resistentes y estéticas. Ideales para interiores y exteriores, con diseños personalizados.</p>
                        <a href="/productos/puertasA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/banos.jpeg') }}" class="card-img-top" alt="Baños">
                    <div class="card-body">
                        <h5 class="card-title">Baños</h5>
                        <p class="card-text">Baños de acero elegantes y modernos. Diseño contemporáneo que aporta durabilidad y estilo a tu espacio.</p>
                        <a href="/productos/banosA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/pasamanos.jpeg') }}" class="card-img-top" alt="Pasamanos">
                    <div class="card-body">
                        <h5 class="card-title">Pasamanos</h5>
                        <p class="card-text">Pasamanos de acero robustos y seguros. Perfectos para escaleras y balcones, con acabados de alta calidad.</p>
                        <a href="/productos/pasamanosA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/ventanas.jpeg') }}" class="card-img-top" alt="Ventanas">
                    <div class="card-body">
                        <h5 class="card-title">Ventanas</h5>
                        <p class="card-text">Ventanas de acero de alta eficiencia energética. Aislantes térmicos y acústicos para tu hogar o negocio.</p>
                        <a href="/productos/ventanasA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/repisas.jpeg') }}" class="card-img-top" alt="Repisas">
                    <div class="card-body">
                        <h5 class="card-title">Repisas</h5>
                        <p class="card-text">Repisas de acero elegantes y funcionales. Perfectas para cualquier espacio, combinando estilo y practicidad.</p>
                        <a href="/productos/repisasA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/mesas.jpeg') }}" class="card-img-top" alt="Mesas">
                    <div class="card-body">
                        <h5 class="card-title">Mesas</h5>
                        <p class="card-text">Mesas de acero duraderas y modernas. Ideales para interiores y exteriores, con diseños personalizados.</p>
                        <a href="/productos/mesasA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/otros_servicios.jpeg') }}" class="card-img-top" alt="Otros Servicios">
                    <div class="card-body">
                        <h5 class="card-title">Otros Servicios</h5>
                        <p class="card-text">Servicios adicionales de instalación y mantenimiento. Profesionales capacitados para todas tus necesidades de acero.</p>
                        <a href="/productos/otrosA" class="btn btn-primary">Ver más</a>
                        <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                        <button class="btn btn-disable">Deshabilitar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Modal para añadir/editar categorías -->
    <div class="modal fade" id="addEditModal" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEditModalLabel">Añadir/Editar Categoría</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addEditForm">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Imagen</label>
                            <input type="file" class="form-control-file" id="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categories = document.getElementById('categories');
            const addEditForm = document.getElementById('addEditForm');
            let editMode = false;
            let currentCategory = null;

            // Manejar el envío del formulario
            addEditForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const name = document.getElementById('name').value;
                const description = document.getElementById('description').value;
                const image = document.getElementById('image').files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imageUrl = e.target.result;

                    if (editMode && currentCategory) {
                        // Editar categoría existente
                        currentCategory.querySelector('.card-title').textContent = name;
                        currentCategory.querySelector('.card-text').textContent = description;
                        currentCategory.querySelector('.card-img-top').src = imageUrl;
                    } else {
                        // Añadir nueva categoría
                        const newCategory = document.createElement('div');
                        newCategory.classList.add('col-md-4');
                        newCategory.innerHTML = `
                            <div class="card">
                                <img src="${imageUrl}" class="card-img-top" alt="${name}">
                                <div class="card-body">
                                    <h5 class="card-title">${name}</h5>
                                    <p class="card-text">${description}</p>
                                    <a href="#" class="btn btn-primary">Ver más</a>
                                    <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                                    <button class="btn btn-disable">Deshabilitar</button>
                                </div>
                            </div>
                        `;
                        categories.appendChild(newCategory);
                    }

                    // Mostrar alerta de confirmación
                    alert(editMode ? 'Categoría editada exitosamente' : 'Categoría añadida exitosamente');

                    // Limpiar el formulario y cerrar el modal
                    addEditForm.reset();
                    $('#addEditModal').modal('hide');
                };

                if (image) {
                    reader.readAsDataURL(image);
                }
            });

            // Manejar el clic en el botón de editar
            categories.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-edit')) {
                    editMode = true;
                    currentCategory = event.target.closest('.card');
                    document.getElementById('name').value = currentCategory.querySelector('.card-title').textContent;
                    document.getElementById('description').value = currentCategory.querySelector('.card-text').textContent;
                }
            });

            // Manejar el clic en el botón de deshabilitar
            categories.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-disable')) {
                    const category = event.target.closest('.card');
                    category.classList.toggle('disabled');
                    event.target.textContent = category.classList.contains('disabled') ? 'Habilitar' : 'Deshabilitar';
                    event.target.classList.toggle('enabled');
                    alert(category.classList.contains('disabled') ? 'Categoría deshabilitada' : 'Categoría habilitada');
                }
            });

            // Resetear el modo de edición al cerrar el modal
            $('#addEditModal').on('hidden.bs.modal', function () {
                editMode = false;
                currentCategory = null;
                addEditForm.reset();
            });
        });
    </script>
</body>
</html>
