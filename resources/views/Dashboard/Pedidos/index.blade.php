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
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pedidos
                    </div>
                    <div class="card-body">
                        <form id="addOrderForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="cliente">Cliente</label>
                                    <input type="text" class="form-control" id="cliente" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="producto">Producto</label>
                                    <input type="text" class="form-control" id="producto" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" class="form-control" id="cantidad" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" id="estado" required>
                                        <option value="Pendiente">Pendiente</option>
                                        <option value="Enviado">Enviado</option>
                                        <option value="Entregado">Entregado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2 align-self-end">
                                    <button type="submit" class="btn btn-primary">Agregar Pedido</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="ordersTableBody">
                                <script>
                                    // Ejemplo de datos de pedidos
                                    let orders = [
                                        { id: 1, cliente: 'Juan Pérez', producto: 'Vidrio Templado', cantidad: 5, estado: 'Pendiente' },
                                        { id: 2, cliente: 'Ana Gómez', producto: 'Acero Inoxidable', cantidad: 3, estado: 'Enviado' },
                                        { id: 3, cliente: 'Carlos López', producto: 'Vidrio Laminado', cantidad: 2, estado: 'Entregado' }
                                    ];
                                
                                    // Función para renderizar los pedidos en la tabla
                                    function renderOrders() {
                                        const ordersTableBody = document.getElementById('ordersTableBody');
                                        ordersTableBody.innerHTML = '';
                                
                                        orders.forEach(order => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${order.id}</td>
                                                <td>${order.cliente}</td>
                                                <td>${order.producto}</td>
                                                <td>${order.cantidad}</td>
                                                <td>${order.estado}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editOrder(${order.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteOrder(${order.id})">Eliminar</button>
                                                </td>
                                            `;
                                            ordersTableBody.appendChild(row);
                                        });
                                    }
                                
                                    // Función para editar un pedido
                                    function editOrder(id) {
                                        const order = orders.find(order => order.id === id);
                                        if (order) {
                                            document.getElementById('cliente').value = order.cliente;
                                            document.getElementById('producto').value = order.producto;
                                            document.getElementById('cantidad').value = order.cantidad;
                                            document.getElementById('estado').value = order.estado;
                                            document.getElementById('addOrderForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar un pedido
                                    function deleteOrder(id) {
                                        const index = orders.findIndex(order => order.id === id);
                                        if (index !== -1) {
                                            orders.splice(index, 1);
                                            renderOrders();
                                        }
                                    }

                                    // Función para agregar o actualizar un pedido
                                    function addOrUpdateOrder(event) {
                                        event.preventDefault();
                                        const cliente = document.getElementById('cliente').value;
                                        const producto = document.getElementById('producto').value;
                                        const cantidad = document.getElementById('cantidad').value;
                                        const estado = document.getElementById('estado').value;
                                        const editingId = document.getElementById('addOrderForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar pedido existente
                                            const order = orders.find(order => order.id == editingId);
                                            if (order) {
                                                order.cliente = cliente;
                                                order.producto = producto;
                                                order.cantidad = cantidad;
                                                order.estado = estado;
                                            }
                                            delete document.getElementById('addOrderForm').dataset.editingId;
                                        } else {
                                            // Agregar nuevo pedido
                                            const newOrder = {
                                                id: orders.length ? orders[orders.length - 1].id + 1 : 1,
                                                cliente,
                                                producto,
                                                cantidad,
                                                estado
                                            };
                                            orders.push(newOrder);
                                        }

                                        renderOrders();
                                        document.getElementById('addOrderForm').reset();
                                    }

                                    // Renderizar los pedidos al cargar la página
                                    document.addEventListener('DOMContentLoaded', () => {
                                        renderOrders();
                                        document.getElementById('addOrderForm').addEventListener('submit', addOrUpdateOrder);
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
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
