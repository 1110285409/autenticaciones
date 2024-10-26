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
        <h1>Panel de Administración de Inventarios</h1>
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
                        Inventarios
                    </div>
                    <div class="card-body">
                        <form id="addInventoryForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nombreProducto">Nombre del Producto</label>
                                    <input type="text" class="form-control" id="nombreProducto" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="categoria">Categoría</label>
                                    <input type="text" class="form-control" id="categoria" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" class="form-control" id="cantidad" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="proveedor">Proveedor</label>
                                    <input type="text" class="form-control" id="proveedor" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" id="estado" required>
                                        <option value="Disponible">Disponible</option>
                                        <option value="Agotado">Agotado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fechaIngreso">Fecha de Ingreso</label>
                                    <input type="date" class="form-control" id="fechaIngreso" required>
                                </div>
                                <div class="form-group col-md-3 align-self-end">
                                    <button type="submit" class="btn btn-primary">Agregar Producto</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Cantidad</th>
                                    <th>Proveedor</th>
                                    <th>Estado</th>
                                    <th>Fecha de Ingreso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="inventoriesTableBody">
                                <script>
                                    // Ejemplo de datos de inventarios
                                    let inventories = [
                                        { id: 1, nombre: 'Vidrio Templado', categoria: 'Vidrios', cantidad: 100, proveedor: 'Proveedor A', estado: 'Disponible', fechaIngreso: '2024-10-01' },
                                        { id: 2, nombre: 'Acero Inoxidable', categoria: 'Aceros', cantidad: 50, proveedor: 'Proveedor B', estado: 'Disponible', fechaIngreso: '2024-10-02' },
                                        { id: 3, nombre: 'Aluminio', categoria: 'Metales', cantidad: 200, proveedor: 'Proveedor C', estado: 'Agotado', fechaIngreso: '2024-10-03' }
                                    ];
                                
                                    // Función para renderizar los inventarios en la tabla
                                    function renderInventories() {
                                        const inventoriesTableBody = document.getElementById('inventoriesTableBody');
                                        inventoriesTableBody.innerHTML = '';
                                
                                        inventories.forEach(inventory => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${inventory.id}</td>
                                                <td>${inventory.nombre}</td>
                                                <td>${inventory.categoria}</td>
                                                <td>${inventory.cantidad}</td>
                                                <td>${inventory.proveedor}</td>
                                                <td>${inventory.estado}</td>
                                                <td>${inventory.fechaIngreso}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editInventory(${inventory.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteInventory(${inventory.id})">Eliminar</button>
                                                </td>
                                            `;
                                            inventoriesTableBody.appendChild(row);
                                        });
                                    }

                                    // Función para editar un inventario
                                    function editInventory(id) {
                                        const inventory = inventories.find(inventory => inventory.id === id);
                                        if (inventory) {
                                            document.getElementById('nombreProducto').value = inventory.nombre;
                                            document.getElementById('categoria').value = inventory.categoria;
                                            document.getElementById('cantidad').value = inventory.cantidad;
                                            document.getElementById('proveedor').value = inventory.proveedor;
                                            document.getElementById('estado').value = inventory.estado;
                                            document.getElementById('fechaIngreso').value = inventory.fechaIngreso;
                                            document.getElementById('addInventoryForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar un inventario
                                    function deleteInventory(id) {
                                        const index = inventories.findIndex(inventory => inventory.id === id);
                                        if (index !== -1) {
                                            inventories.splice(index, 1);
                                            renderInventories();
                                        }
                                    }

                                    // Función para agregar o actualizar un inventario
                                    function addOrUpdateInventory(event) {
                                        event.preventDefault();
                                        const nombre = document.getElementById('nombreProducto').value;
                                        const categoria = document.getElementById('categoria').value;
                                        const cantidad = document.getElementById('cantidad').value;
                                        const proveedor = document.getElementById('proveedor').value;
                                        const estado = document.getElementById('estado').value;
                                        const fechaIngreso = document.getElementById('fechaIngreso').value;
                                        const editingId = document.getElementById('addInventoryForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar inventario existente
                                            const inventory = inventories.find(inventory => inventory.id == editingId);
                                            if (inventory) {
                                                inventory.nombre = nombre;
                                                inventory.categoria = categoria;
                                                inventory.cantidad = cantidad;
                                                inventory.proveedor = proveedor;
                                                inventory.estado = estado;
                                                inventory.fechaIngreso = fechaIngreso;
                                            }
                                            delete document.getElementById('addInventoryForm').dataset.editingId;
                                        } else {
                                            // Agregar nuevo inventario
                                            const newInventory = {
                                                id: inventories.length ? inventories[inventories.length - 1].id + 1 : 1,
                                                nombre,
                                                categoria,
                                                cantidad,
                                                proveedor,
                                                estado,
                                                fechaIngreso
                                            };
                                            inventories.push(newInventory);
                                        }

                                        renderInventories();
                                        document.getElementById('addInventoryForm').reset();
                                    }

                                     // Renderizar los inventarios al cargar la página
                                     document.addEventListener('DOMContentLoaded', () => {
                                        renderInventories();
                                        document.getElementById('addInventoryForm').addEventListener('submit', addOrUpdateInventory);
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
