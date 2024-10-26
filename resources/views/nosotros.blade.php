<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Vidrios Y Aceros Sandra</title>
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

        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
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
        <h1>Sobre Nosotros</h1>
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
        <h2>Quiénes Somos</h2>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addEditModal">Añadir Persona</button>
        <div class="row" id="team-members">
            <div class="col-md-4 team-member text-center">
                <img src="{{ asset('images/andersson.jpg') }}" alt="Andersson">
                <h5>Andersson Sinisterra Angulo</h5>
                <h5>Practicante TI</h5>
                <p>Andersson sinisterra practicante TI. Soy un estudiante de 32 años, apasionado por la tecnología. Mi viaje en el mundo laboral IT comenzó en 2024, y desde entonces he estado trabajando para fusionar mi amor por la educación con las innovaciones digitales.</p>
                <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                <button class="btn btn-disable">Deshabilitar</button>
            </div>
            <div class="col-md-4 team-member text-center">
                <img src="{{ asset('images/samir.jpg') }}" alt="Samir">
                <h5>Samir Agudelo Curaca</h5>
                <h5>Tecnologo industrial</h5>
                <p>Profesional experimentado de 40 años con formación como tecnólogo en mantenimiento industrial. Decidió ampliar sus horizontes al convertirse en estudiante del CECEP en 2022 en sistemas informáticos.</p>
                <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                <button class="btn btn-disable">Deshabilitar</button>
            </div>
            <div class="col-md-4 team-member text-center">
                <img src="{{ asset('images/julian.jpg') }}" alt="Julian">
                <h5>Julian David Chavarria Zapata</h5>
                <h5>Estudiante</h5>
                <p>Estudiante de 20 años que inició su trayectoria educativa en el CECEP en 2021. Representa la nueva generación de profesionales en formación, ansioso por aprender y crecer en su campo de estudio.</p>
                <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                <button class="btn btn-disable">Deshabilitar</button>
            </div>
        </div>
    </main>

    <!-- Modal para añadir/editar personas -->
    <div class="modal fade" id="addEditModal" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEditModalLabel">Añadir/Editar Persona</h5>
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
                            <label for="role">Rol</label>
                            <input type="text" class="form-control" id="role" required>
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
            const teamMembers = document.getElementById('team-members');
            const addEditForm = document.getElementById('addEditForm');
            let editMode = false;
            let currentMember = null;

            // Manejar el envío del formulario
            addEditForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const name = document.getElementById('name').value;
                const role = document.getElementById('role').value;
                const description = document.getElementById('description').value;
                const image = document.getElementById('image').files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imageUrl = e.target.result;

                    if (editMode && currentMember) {
                        // Editar miembro existente
                        currentMember.querySelector('h5').textContent = name;
                        currentMember.querySelector('h5 + h5').textContent = role;
                        currentMember.querySelector('p').textContent = description;
                        currentMember.querySelector('img').src = imageUrl;
                    } else {
                        // Añadir nuevo miembro
                        const newMember = document.createElement('div');
                        newMember.classList.add('col-md-4', 'team-member', 'text-center');
                        newMember.innerHTML = `
                            <img src="${imageUrl}" alt="${name}">
                            <h5>${name}</h5>
                            <h5>${role}</h5>
                            <p>${description}</p>
                            <button class="btn btn-warning btn-edit" data-toggle="modal" data-target="#addEditModal">Editar</button>
                            <button class="btn btn-disable">Deshabilitar</button>
                        `;
                        teamMembers.appendChild(newMember);
                    }

                    // Mostrar alerta de confirmación
                    alert(editMode ? 'Persona editada exitosamente' : 'Persona añadida exitosamente');

                    // Limpiar el formulario y cerrar el modal
                    addEditForm.reset();
                    $('#addEditModal').modal('hide');
                };

                if (image) {
                    reader.readAsDataURL(image);
                }
            });

            // Manejar el clic en el botón de editar
            teamMembers.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-edit')) {
                    editMode = true;
                    currentMember = event.target.closest('.team-member');
                    document.getElementById('name').value = currentMember.querySelector('h5').textContent;
                    document.getElementById('role').value = currentMember.querySelector('h5 + h5').textContent;
                    document.getElementById('description').value = currentMember.querySelector('p').textContent;
                }
            });

            // Manejar el clic en el botón de deshabilitar
            teamMembers.addEventListener('click', function(event) {
                if (event.target.classList.contains('btn-disable')) {
                    const member = event.target.closest('.team-member');
                    member.classList.toggle('disabled');
                    event.target.textContent = member.classList.contains('disabled') ? 'Habilitar' : 'Deshabilitar';
                    event.target.classList.toggle('enabled');
                    alert(member.classList.contains('disabled') ? 'Desea deshabilitada a la persona' : 'Desea habilitada a la persona');
                }
            });

            // Resetear el modo de edición al cerrar el modal
            $('#addEditModal').on('hidden.bs.modal', function () {
                editMode = false;
                currentMember = null;
                addEditForm.reset();
            });
        });
    </script>
</body>
</html>
