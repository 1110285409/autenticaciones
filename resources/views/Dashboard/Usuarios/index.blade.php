<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidrios Y Aceros Sandra - Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

        .social-links a {
            font-size: 1.5rem;
        }

        .card-header {
            background-color: #17a2b8;
            color: white;
        }

        .btn-primary {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Panel de Administración de Usuarios</h1>
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
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Usuarios
                    </div>
                    <div class="card-body">
                        <form id="addUserForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nombreCompleto">Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombreCompleto" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cedula">Cédula</label>
                                    <input type="number" class="form-control" id="cedula" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="rol">Rol</label>
                                    <select class="form-control" id="rol" required>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Usuario">Usuario</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 align-self-end">
                                    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Cédula</th>
                                    <th>Usuario de Red</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="usersTableBody">
                                <script>
                                    // Ejemplo de datos de usuarios
                                    let users = [
                                        { id: 1, nombreCompleto: 'Juan Pérez', cedula: '12345678', usuarioRed: 'JP1234', rol: 'Administrador' },
                                        { id: 2, nombreCompleto: 'Ana Gómez', cedula: '87654321', usuarioRed: 'AG4321', rol: 'Usuario' },
                                        { id: 3, nombreCompleto: 'Carlos López', cedula: '11223344', usuarioRed: 'CL3344', rol: 'Usuario' },
                                        { id: 4, nombreCompleto: 'María Rodríguez', cedula: '55667788', usuarioRed: 'MR7788', rol: 'Administrador' },
                                        { id: 5, nombreCompleto: 'Luis Fernández', cedula: '99887766', usuarioRed: 'LF7766', rol: 'Usuario' }
                                    ];
                                
                                    // Función para generar el usuario de red
                                    function generarUsuarioRed(nombreCompleto, cedula) {
                                        const iniciales = nombreCompleto.split(' ').map(nombre => nombre.charAt(0)).join('');
                                        const ultimosCuatro = cedula.slice(-4);
                                        return iniciales + ultimosCuatro;
                                    }

                                    // Función para renderizar los usuarios en la tabla
                                    function renderUsers() {
                                        const usersTableBody = document.getElementById('usersTableBody');
                                        usersTableBody.innerHTML = '';
                                
                                        users.forEach(user => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${user.id}</td>
                                                <td>${user.nombreCompleto}</td>
                                                <td>${user.cedula}</td>
                                                <td>${user.usuarioRed}</td>
                                                <td>${user.rol}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editUser(${user.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteUser(${user.id})">Eliminar</button>
                                                </td>
                                            `;
                                            usersTableBody.appendChild(row);
                                        });
                                    }
                                
                                    // Función para editar un usuario
                                    function editUser(id) {
                                        const user = users.find(user => user.id === id);
                                        if (user) {
                                            document.getElementById('nombreCompleto').value = user.nombreCompleto;
                                            document.getElementById('cedula').value = user.cedula;
                                            document.getElementById('rol').value = user.rol;
                                            document.getElementById('addUserForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar un usuario
                                    function deleteUser(id) {
                                        const index = users.findIndex(user => user.id === id);
                                        if (index !== -1) {
                                            users.splice(index, 1);
                                            renderUsers();
                                        }
                                    }

                                    // Función para agregar o actualizar un usuario
                                    function addOrUpdateUser(event) {
                                        event.preventDefault();
                                        const nombreCompleto = document.getElementById('nombreCompleto').value;
                                        const cedula = document.getElementById('cedula').value;
                                        const rol = document.getElementById('rol').value;
                                        const usuarioRed = generarUsuarioRed(nombreCompleto, cedula);
                                        const editingId = document.getElementById('addUserForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar usuario existente
                                            const user = users.find(user => user.id == editingId);
                                            if (user) {
                                                user.nombreCompleto = nombreCompleto;
                                                user.cedula = cedula;
                                                user.usuarioRed = usuarioRed;
                                                user.rol = rol;
                                            }
                                            delete document.getElementById('addUserForm').dataset.editingId;
                                        } else {
                                            // Agregar nuevo usuario
                                            const newUser = {
                                                id: users.length ? users[users.length - 1].id + 1 : 1,
                                                nombreCompleto,
                                                cedula,
                                                usuarioRed,
                                                rol
                                            };
                                            users.push(newUser);
                                        }

                                        renderUsers();
                                        document.getElementById('addUserForm').reset();
                                    }

                                    // Renderizar los usuarios al cargar la página
                                    document.addEventListener('DOMContentLoaded', () => {
                                        renderUsers();
                                        document.getElementById('addUserForm').addEventListener('submit', addOrUpdateUser);
                                    });
                                </script>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>© 2024 Vidrios Y Aceros Sandra</p>
            <div class="social-links">
                <a href="#"