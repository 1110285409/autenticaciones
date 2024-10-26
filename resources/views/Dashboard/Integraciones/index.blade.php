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
        <h1>Panel de Administración de Integraciones</h1>
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
                        Integraciones
                    </div>
                    <div class="card-body">
                        <form id="addIntegrationForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nombreIntegracion">Nombre de la Integración</label>
                                    <input type="text" class="form-control" id="nombreIntegracion" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="descripcion">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fecha">Fecha</label>
                                    <input type="date" class="form-control" id="fecha" required>
                                </div>
                                <div class="form-group col-md-3 align-self-end">
                                    <button type="submit" class="btn btn-primary">Agregar Integración</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="integrationsTableBody">
                                <script>
                                    // Ejemplo de datos de integraciones
                                    let integrations = [
                                        { id: 1, nombre: 'Integración con API de Ventas', descripcion: 'Conexión con la API de ventas para obtener datos en tiempo real.', fecha: '2024-10-01' },
                                        { id: 2, nombre: 'Integración con Base de Datos', descripcion: 'Conexión con la base de datos para almacenar y recuperar información.', fecha: '2024-10-02' },
                                        { id: 3, nombre: 'Integración con Servicio de Autenticación', descripcion: 'Implementación de autenticación para usuarios.', fecha: '2024-10-03' }
                                    ];
                                
                                    // Función para renderizar las integraciones en la tabla
                                    function renderIntegrations() {
                                        const integrationsTableBody = document.getElementById('integrationsTableBody');
                                        integrationsTableBody.innerHTML = '';
                                
                                        integrations.forEach(integration => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${integration.id}</td>
                                                <td>${integration.nombre}</td>
                                                <td>${integration.descripcion}</td>
                                                <td>${integration.fecha}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editIntegration(${integration.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteIntegration(${integration.id})">Eliminar</button>
                                                </td>
                                            `;
                                            integrationsTableBody.appendChild(row);
                                        });
                                    }

                                    // Función para editar una integración
                                    function editIntegration(id) {
                                        const integration = integrations.find(integration => integration.id === id);
                                        if (integration) {
                                            document.getElementById('nombreIntegracion').value = integration.nombre;
                                            document.getElementById('descripcion').value = integration.descripcion;
                                            document.getElementById('fecha').value = integration.fecha;
                                            document.getElementById('addIntegrationForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar una integración
                                    function deleteIntegration(id) {
                                        const index = integrations.findIndex(integration => integration.id === id);
                                        if (index !== -1) {
                                            integrations.splice(index, 1);
                                            renderIntegrations();
                                        }
                                    }

                                    // Función para agregar o actualizar una integración
                                    function addOrUpdateIntegration(event) {
                                        event.preventDefault();
                                        const nombre = document.getElementById('nombreIntegracion').value;
                                        const descripcion = document.getElementById('descripcion').value;
                                        const fecha = document.getElementById('fecha').value;
                                        const editingId = document.getElementById('addIntegrationForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar integración existente
                                            const integration = integrations.find(integration => integration.id == editingId);
                                            if (integration) {
                                                integration.nombre = nombre;
                                                integration.descripcion = descripcion;
                                                integration.fecha = fecha;
                                            }
                                            delete document.getElementById('addIntegrationForm').dataset.editingId;
                                        } else {
                                            // Agregar nueva integración
                                            const newIntegration = {
                                                id: integrations.length ? integrations[integrations.length - 1].id + 1 : 1,
                                                nombre,
                                                descripcion,
                                                fecha
                                            };
                                            integrations.push(newIntegration);
                                        }

                                        renderIntegrations();
                                        document.getElementById('addIntegrationForm').reset();
                                    }

                                    // Renderizar las integraciones al cargar la página
                                    document.addEventListener('DOMContentLoaded', () => {
                                        renderIntegrations();
                                        document.getElementById('addIntegrationForm').addEventListener('submit', addOrUpdateIntegration);
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
                <a href="#"></a>
            </div>
        </div>
    </footer>
</body>
</html>