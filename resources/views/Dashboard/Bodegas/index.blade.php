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
        <h1>Panel de Administración de Bodegas</h1>
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
                        Bodegas
                    </div>
                    <div class="card-body">
                        <form id="addWarehouseForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nombreBodega">Nombre de la Bodega</label>
                                    <input type="text" class="form-control" id="nombreBodega" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ubicacion">Ubicación</label>
                                    <input type="text" class="form-control" id="ubicacion" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="capacidad">Capacidad</label>
                                    <input type="number" class="form-control" id="capacidad" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="responsable">Responsable</label>
                                    <input type="text" class="form-control" id="responsable" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" id="estado" required>
                                        <option value="Activa">Activa</option>
                                        <option value="Inactiva">Inactiva</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ultimaInspeccion">Última Inspección</label>
                                    <input type="date" class="form-control" id="ultimaInspeccion" required>
                                </div>
                                <div class="form-group col-md-3 align-self-end">
                                    <button type="submit" class="btn btn-primary">Agregar Bodega</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Ubicación</th>
                                    <th>Capacidad</th>
                                    <th>Responsable</th>
                                    <th>Estado</th>
                                    <th>Última Inspección</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="warehousesTableBody">
                                <script>
                                    // Ejemplo de datos de bodegas
                                    let warehouses = [
                                        { id: 1, nombre: 'Bodega Central', ubicacion: 'Calle 123, Ciudad', capacidad: 1000, responsable: 'Juan Pérez', estado: 'Activa', ultimaInspeccion: '2024-10-01' },
                                        { id: 2, nombre: 'Bodega Norte', ubicacion: 'Avenida 45, Ciudad', capacidad: 800, responsable: 'Ana Gómez', estado: 'Activa', ultimaInspeccion: '2024-10-02' },
                                        { id: 3, nombre: 'Bodega Sur', ubicacion: 'Carrera 67, Ciudad', capacidad: 1200, responsable: 'Carlos López', estado: 'Inactiva', ultimaInspeccion: '2024-10-03' }
                                    ];
                                
                                    // Función para renderizar las bodegas en la tabla
                                    function renderWarehouses() {
                                        const warehousesTableBody = document.getElementById('warehousesTableBody');
                                        warehousesTableBody.innerHTML = '';
                                
                                        warehouses.forEach(warehouse => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${warehouse.id}</td>
                                                <td>${warehouse.nombre}</td>
                                                <td>${warehouse.ubicacion}</td>
                                                <td>${warehouse.capacidad}</td>
                                                <td>${warehouse.responsable}</td>
                                                <td>${warehouse.estado}</td>
                                                <td>${warehouse.ultimaInspeccion}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editWarehouse(${warehouse.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteWarehouse(${warehouse.id})">Eliminar</button>
                                                </td>
                                            `;
                                            warehousesTableBody.appendChild(row);
                                        });
                                    }

                                    // Función para editar una bodega
                                    function editWarehouse(id) {
                                        const warehouse = warehouses.find(warehouse => warehouse.id === id);
                                        if (warehouse) {
                                            document.getElementById('nombreBodega').value = warehouse.nombre;
                                            document.getElementById('ubicacion').value = warehouse.ubicacion;
                                            document.getElementById('capacidad').value = warehouse.capacidad;
                                            document.getElementById('responsable').value = warehouse.responsable;
                                            document.getElementById('estado').value = warehouse.estado;
                                            document.getElementById('ultimaInspeccion').value = warehouse.ultimaInspeccion;
                                            document.getElementById('addWarehouseForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar una bodega
                                    function deleteWarehouse(id) {
                                        const index = warehouses.findIndex(warehouse => warehouse.id === id);
                                        if (index !== -1) {
                                            warehouses.splice(index, 1);
                                            renderWarehouses();
                                        }
                                    }

                                    // Función para agregar o actualizar una bodega
                                    function addOrUpdateWarehouse(event) {
                                        event.preventDefault();
                                        const nombre = document.getElementById('nombreBodega').value;
                                        const ubicacion = document.getElementById('ubicacion').value;
                                        const capacidad = document.getElementById('capacidad').value;
                                        const responsable = document.getElementById('responsable').value;
                                        const estado = document.getElementById('estado').value;
                                        const ultimaInspeccion = document.getElementById('ultimaInspeccion').value;
                                        const editingId = document.getElementById('addWarehouseForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar bodega existente
                                            const warehouse = warehouses.find(warehouse => warehouse.id == editingId);
                                            if (warehouse) {
                                                warehouse.nombre = nombre;
                                                warehouse.ubicacion = ubicacion;
                                                warehouse.capacidad = capacidad;
                                                warehouse.responsable = responsable;
                                                warehouse.estado = estado;
                                                warehouse.ultimaInspeccion = ultimaInspeccion;
                                            }
                                            delete document.getElementById('addWarehouseForm').dataset.editingId;
                                        } else {
                                            // Agregar nueva bodega
                                            const newWarehouse = {
                                                id: warehouses.length ? warehouses[warehouses.length - 1].id + 1 : 1,
                                                nombre,
                                                ubicacion,
                                                capacidad,
                                                responsable,
                                                estado,
                                                ultimaInspeccion
                                            };
                                            warehouses.push(newWarehouse);
                                        }

                                        renderWarehouses();
                                        document.getElementById('addWarehouseForm').reset();
                                    }

                                    // Renderizar las bodegas al cargar la página
                                    document.addEventListener('DOMContentLoaded', () => {
                                        renderWarehouses();
                                        document.getElementById('addWarehouseForm').addEventListener('submit', addOrUpdateWarehouse);
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