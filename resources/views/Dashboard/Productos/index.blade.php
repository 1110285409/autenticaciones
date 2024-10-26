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
            background-color: #28a745;
            color: white;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Panel de Administración de Productos</h1>
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
                        Productos
                    </div>
                    <div class="card-body">
                        <form id="addProductForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="categoria">Categoría</label>
                                    <input type="text" class="form-control" id="categoria" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="precio">Precio (COP)</label>
                                    <input type="number" class="form-control" id="precio" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="stock">Stock</label>
                                    <input type="number" class="form-control" id="stock" required>
                                </div>
                                <div class="form-group col-md-2 align-self-end">
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
                                    <th>Precio (COP)</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="productsTableBody">
                                <script>
                                    // Ejemplo de datos de productos
                                    let products = [
                                        { id: 1, nombre: 'Ventana de Aluminio', categoria: 'Ventanas', precio: 250000, stock: 40 },
                                        { id: 2, nombre: 'Puerta de Madera', categoria: 'Puertas', precio: 500000, stock: 15 },
                                        { id: 3, nombre: 'Espejo Decorativo', categoria: 'Espejos', precio: 120000, stock: 25 },
                                        { id: 4, nombre: 'Mesa de Vidrio', categoria: 'Muebles', precio: 300000, stock: 10 },
                                        { id: 5, nombre: 'Baranda de Acero', categoria: 'Barandas', precio: 450000, stock: 20 },
                                        { id: 6, nombre: 'Lámpara de Techo', categoria: 'Iluminación', precio: 150000, stock: 30 },
                                        { id: 7, nombre: 'Estante de Madera', categoria: 'Muebles', precio: 200000, stock: 50 },
                                        { id: 8, nombre: 'Puerta de Vidrio', categoria: 'Puertas', precio: 600000, stock: 12 },
                                        { id: 9, nombre: 'Ventana de PVC', categoria: 'Ventanas', precio: 220000, stock: 35 },
                                        { id: 10, nombre: 'Espejo de Baño', categoria: 'Espejos', precio: 80000, stock: 40 },
                                        { id: 11, nombre: 'Mesa de Centro', categoria: 'Muebles', precio: 180000, stock: 25 },
                                        { id: 12, nombre: 'Baranda de Vidrio', categoria: 'Barandas', precio: 500000, stock: 15 },
                                        { id: 13, nombre: 'Lámpara de Pared', categoria: 'Iluminación', precio: 120000, stock: 20 }
                                    ];
                                
                                    // Función para renderizar los productos en la tabla
                                    function renderProducts() {
                                        const productsTableBody = document.getElementById('productsTableBody');
                                        productsTableBody.innerHTML = '';
                                
                                        products.forEach(product => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${product.id}</td>
                                                <td>${product.nombre}</td>
                                                <td>${product.categoria}</td>
                                                <td>${product.precio.toLocaleString('es-CO', { style: 'currency', currency: 'COP' })}</td>
                                                <td>${product.stock}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editProduct(${product.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteProduct(${product.id})">Eliminar</button>
                                                </td>
                                            `;
                                            productsTableBody.appendChild(row);
                                        });
                                    }
                                
                                    // Función para editar un producto
                                    function editProduct(id) {
                                        const product = products.find(product => product.id === id);
                                        if (product) {
                                            document.getElementById('nombre').value = product.nombre;
                                            document.getElementById('categoria').value = product.categoria;
                                            document.getElementById('precio').value = product.precio;
                                            document.getElementById('stock').value = product.stock;
                                            document.getElementById('addProductForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar un producto
                                    function deleteProduct(id) {
                                        const index = products.findIndex(product => product.id === id);
                                        if (index !== -1) {
                                            products.splice(index, 1);
                                            renderProducts();
                                        }
                                    }

                                    // Función para agregar o actualizar un producto
                                    function addOrUpdateProduct(event) {
                                        event.preventDefault();
                                        const nombre = document.getElementById('nombre').value;
                                        const categoria = document.getElementById('categoria').value;
                                        const precio = document.getElementById('precio').value;
                                        const stock = document.getElementById('stock').value;
                                        const editingId = document.getElementById('addProductForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar producto existente
                                            const product = products.find(product => product.id == editingId);
                                            if (product) {
                                                product.nombre = nombre;
                                                product.categoria = categoria;
                                                product.precio = precio;
                                                product.stock = stock;
                                            }
                                            delete document.getElementById('addProductForm').dataset.editingId;
                                        } else {
                                            // Agregar nuevo producto
                                            const newProduct = {
                                                id: products.length ? products[products.length - 1].id + 1 : 1,
                                                nombre,
                                                categoria,
                                                precio,
                                                stock
                                            };
                                            products.push(newProduct);
                                        }

                                        renderProducts();
                                        document.getElementById('addProductForm').reset();
                                    }

                                    // Renderizar los productos al cargar la página
                                    document.addEventListener('DOMContentLoaded', () => {
                                        renderProducts();
                                        document.getElementById('addProductForm').addEventListener('submit', addOrUpdateProduct);
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