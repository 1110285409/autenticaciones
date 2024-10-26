<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductVidrios - Divisiones de Baño</title>
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
        .btn-primary, .btn-edit, .btn-add, .btn-toggle, .btn-save, .btn-delete {
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin: 5px;
        }
        .btn-edit {
            background-color: #ffc107;
        }
        .btn-add {
            background-color: #28a745;
        }
        .btn-toggle {
            background-color: #17a2b8;
        }
        .btn-toggle.disabled {
            background-color: #dc3545;
        }
        .btn-save {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .form-control {
            border-radius: 10px;
        }
        .form-group label {
            font-weight: bold;
        }
        .social-links a {
            font-size: 1.5em;
        }
        .testimonial {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }
        .card.disabled {
            opacity: 0.5;
        }
        #edit-form {
            display: none;
        }
    </style>
</head>
<body>
    <header class="header text-center py-3">
        <h1>Productos De Vidrios - Divisiones de Baño</h1>
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
            <!-- Información de Divisiones de Baño -->
            <div class="col-md-6">
                <h2>Divisiones de Baño</h2>
                <p>En Vidrios Y Aceros Sandra, ofrecemos divisiones de baño de alta calidad con vidrio templado y accesorios negros. Nuestros productos destacan por su durabilidad, claridad y resistencia, proporcionando soluciones elegantes y funcionales para tu baño.</p>
                
                <div class="row">
                    <!-- División de Baño con Accesorios Negros -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/division_accesorios_negros.jpeg') }}" class="card-img-top" alt="División de Baño con Accesorios Negros">
                            <div class="card-body">
                                <h5 class="card-title">División de Baño con Accesorios Negros</h5>
                                <p class="card-text">Nuestras divisiones de baño con accesorios negros ofrecen una combinación perfecta de estilo y funcionalidad, ideales para cualquier tipo de baño.</p>
                                <button class="btn btn-edit" onclick="editItem(this)">Editar</button>
                                <button class="btn btn-toggle" onclick="toggleItem(this)">Deshabilitar</button>
                                <button class="btn btn-save" onclick="saveItem(this)" style="display: none;">Guardar</button>
                                <button class="btn btn-delete" onclick="deleteItem(this)" style="display: none;">Eliminar</button>
                            </div>
                        </div>
                    </div>
                    <!-- División de Baño en Vidrio -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/division_vidrio.jpeg') }}" class="card-img-top" alt="División de Baño en Vidrio">
                            <div class="card-body">
                                <h5 class="card-title">División de Baño en Vidrio</h5>
                                <p class="card-text">Nuestras divisiones de baño en vidrio ofrecen una claridad excepcional y son perfectas para cualquier diseño de baño moderno.</p>
                                <button class="btn btn-edit" onclick="editItem(this)">Editar</button>
                                <button class="btn btn-toggle" onclick="toggleItem(this)">Deshabilitar</button>
                                <button class="btn btn-save" onclick="saveItem(this)" style="display: none;">Guardar</button>
                                <button class="btn btn-delete" onclick="deleteItem(this)" style="display: none;">Eliminar</button>
                            </div>
                        </div>
                    </div>
                    <!-- División de Baño en Vidrio Completo -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/division_vidrio_completo.jpeg') }}" class="card-img-top" alt="División de Baño en Vidrio Completo">
                            <div class="card-body">
                                <h5 class="card-title">División de Baño en Vidrio Completo</h5>
                                <p class="card-text">Las divisiones de baño en vidrio completo proporcionan una solución elegante y sin interrupciones para tu baño.</p>
                                <button class="btn btn-edit" onclick="editItem(this)">Editar</button>
                                <button class="btn btn-toggle" onclick="toggleItem(this)">Deshabilitar</button>
                                <button class="btn btn-save" onclick="saveItem(this)" style="display: none;">Guardar</button>
                                <button class="btn btn-delete" onclick="deleteItem(this)" style="display: none;">Eliminar</button>
                            </div>
                        </div>
                    </div>
                    <!-- División de Baño en Vidrio Templado -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <img src="{{ asset('images/division_vidrio_templado.jpeg') }}" class="card-img-top" alt="División de Baño en Vidrio Templado">
                            <div class="card-body">
                                <h5 class="card-title">División de Baño en Vidrio Templado</h5>
                                <p class="card-text">Nuestras divisiones de baño en vidrio templado son conocidas por su resistencia y seguridad, ideales para cualquier aplicación que requiera durabilidad y protección.</p>
                                <button class="btn btn-edit" onclick="editItem(this)">Editar</button>
                                <button class="btn btn-toggle" onclick="toggleItem(this)">Deshabilitar</button>
                                <button class="btn btn-save" onclick="saveItem(this)" style="display: none;">Guardar</button>
                                <button class="btn btn-delete" onclick="deleteItem(this)" style="display: none;">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulario de Pedido -->
            <div class="col-md-6">
                <h5>Solicita tu División de Baño</h5>
                <form id="form-pedido" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="tipoDivision">Tipo de División</label>
                        <select class="form-control" id="tipoDivision" name="tipoDivision" required>
                            <option value="">Selecciona un tipo de división</option>
                            <option value="accesorios_negros">División con Accesorios Negros</option>
                            <option value="vidrio">División en Vidrio</option>
                            <option value="vidrio_completo">División en Vidrio Completo</option>
                            <option value="vidrio_templado">División en Vidrio Templado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medidas">Medidas (Ancho x Alto)</label>
                        <input type="text" class="form-control" id="medidas" name="medidas" placeholder="Ej. 100cm x 200cm" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Color de Accesorios</label>
                        <input type="text" class="form-control" id="color" name="color" value="Negro" readonly>
                    </div>
                    <div class="form-group">
                        <label for="envio">Dirección de Envío</label>
                        <input type="text" class="form-control" id="envio" name="envio" placeholder="Tu dirección" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="tuemail@ejemplo.com" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Añadir al Carrito</button>
                </form>
                <div class="mt-4">
                    <h5>Carrito de Compras</h5>
                    <ul class="list-group" id="carrito">
                        <!-- Aquí se mostrarán los productos añadidos al carrito -->
                    </ul>
                    <button class="btn btn-success mt-3" data-toggle="modal" data-target="#paymentModal">Proceder al Pago</button>
                </div>
            </div>
        </div>
        <button class="btn btn-add" data-toggle="modal" data-target="#addProductModal">Agregar Producto</button>
    </main>
    <footer class="footer text-center py-3">
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

    <!-- Modal de Pago -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Detalles de Pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="payment-form" onsubmit="return validatePaymentForm()">
                        <div class="form-group">
                            <label for="paymentMethod">Método de Pago</label>
                            <select class="form-control" id="paymentMethod" onchange="togglePaymentFields()" required>
                                <option value="">Selecciona un método de pago</option>
                                <option value="credit">Tarjeta de Crédito</option>
                                <option value="debit">Tarjeta de Débito</option>
                                <option value="efecty">Efecty</option>
                                <option value="pse">PSE</option>
                            </select>
                        </div>
                        <div id="cardFields" style="display: none;">
                            <div class="form-group">
                                <label for="cardNumber">Número de Tarjeta</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                            </div>
                            <div class="form-group">
                                <label for="cardName">Nombre en la Tarjeta</label>
                                <input type="text" class="form-control" id="cardName" placeholder="Nombre Completo" required>
                            </div>
                            <div class="form-group">
                                <label for="expiryDate">Fecha de Expiración</label>
                                <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA" required>
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv" placeholder="123" required>
                            </div>
                        </div>
                        <div id="efectyFields" style="display: none;">
                            <p>Para pagar con Efecty, dirígete a un punto de pago Efecty con el código que recibirás por correo electrónico.</p>
                        </div>
                        <div id="pseFields" style="display: none;">
                            <p>Serás redirigido a la plataforma de pagos PSE para completar tu transacción.</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Pagar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Agregar Producto -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Agregar Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add-product-form" onsubmit="return validateAddProductForm()">
                        <div class="form-group">
                            <label for="productName">Nombre del Producto</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nombre del Producto" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Descripción</label>
                            <textarea class="form-control" id="productDescription" placeholder="Descripción del Producto" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productImage">Imagen del Producto</label>
                            <input type="file" class="form-control" id="productImage" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function editItem(button) {
            const card = button.closest('.card');
            const title = card.querySelector('.card-title');
            const text = card.querySelector('.card-text');
            const saveButton = card.querySelector('.btn-save');
            const editButton = card.querySelector('.btn-edit');
            const deleteButton = card.querySelector('.btn-delete');

            title.innerHTML = `<input type="text" class="form-control" value="${title.innerText}" required>`;
            text.innerHTML = `<textarea class="form-control" required>${text.innerText}</textarea>`;
            saveButton.style.display = 'inline-block';
            editButton.style.display = 'none';
            deleteButton.style.display = 'inline-block';
        }

        function saveItem(button) {
            const card = button.closest('.card');
            const titleInput = card.querySelector('.card-title input');
            const textInput = card.querySelector('.card-text textarea');
            const saveButton = card.querySelector('.btn-save');
            const editButton = card.querySelector('.btn-edit');
            const deleteButton = card.querySelector('.btn-delete');

            if (titleInput.value && textInput.value) {
                card.querySelector('.card-title').innerText = titleInput.value;
                card.querySelector('.card-text').innerText = textInput.value;
                saveButton.style.display = 'none';
                editButton.style.display = 'inline-block';
                deleteButton.style.display = 'none';
            } else {
                alert('Por favor, completa todos los campos.');
            }
        }

        function addItem() {
            $('#addProductModal').modal('show');
        }
        function saveNewProduct() {
            const productName = document.getElementById('productName').value;
            const productDescription = document.getElementById('productDescription').value;
            const productImage = document.getElementById('productImage').files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                const container = document.querySelector('.row');
                const newCard = document.createElement('div');
                newCard.className = 'col-md-12 mb-4';
                newCard.innerHTML = `
                    <div class="card">
                        <img src="${e.target.result}" class="card-img-top" alt="${productName}">
                        <div class="card-body">
                            <h5 class="card-title">${productName}</h5>
                            <p class="card-text">${productDescription}</p>
                            <button class="btn btn-edit" onclick="editItem(this)">Editar</button>
                            <button class="btn btn-toggle" onclick="toggleItem(this)">Deshabilitar</button>
                            <button class="btn btn-save" onclick="saveItem(this)" style="display: none;">Guardar</button>
                            <button class="btn btn-delete" onclick="deleteItem(this)" style="display: none;">Eliminar</button>
                        </div>
                    </div>
                `;
                container.appendChild(newCard);
                $('#addProductModal').modal('hide');
            };

            if (productImage) {
                reader.readAsDataURL(productImage);
            }
        }

        function toggleItem(button) {
            const card = button.closest('.card');
            const img = card.querySelector('img');
            if (img.style.filter === 'grayscale(100%)') {
                img.style.filter = 'none';
                card.classList.remove('disabled');
                button.classList.remove('disabled');
                button.innerText = 'Deshabilitar';
                alert('Imagen habilitada');
            } else {
                img.style.filter = 'grayscale(100%)';
                card.classList.add('disabled');
                button.classList.add('disabled');
                button.innerText = 'Habilitar';
                alert('Imagen deshabilitada');
            }
        }

        function deleteItem(button) {
            const card = button.closest('.card');
            card.remove();
        }

        function addToCart() {
            const tipoDivision = document.getElementById('tipoDivision').value;
            const medidas = document.getElementById('medidas').value;
            const color = document.getElementById('color').value;
            const envio = document.getElementById('envio').value;
            const correo = document.getElementById('correo').value;

            if (tipoDivision && medidas && color && envio && correo) {
                const carrito = document.getElementById('carrito');
                const newItem = document.createElement('li');
                newItem.className = 'list-group-item';
                newItem.innerText = `${tipoDivision} - ${medidas} - ${color} - ${envio} - ${correo}`;
                carrito.appendChild(newItem);
            } else {
                alert('Por favor, completa todos los campos del formulario.');
            }
        }

        function togglePaymentFields() {
            const paymentMethod = document.getElementById('paymentMethod').value;
            const cardFields = document.getElementById('cardFields');
            const efectyFields = document.getElementById('efectyFields');
            const pseFields = document.getElementById('pseFields');

            cardFields.style.display = 'none';
            efectyFields.style.display = 'none';
            pseFields.style.display = 'none';

            if (paymentMethod === 'credit' || paymentMethod === 'debit') {
                cardFields.style.display = 'block';
            } else if (paymentMethod === 'efecty') {
                efectyFields.style.display = 'block';
            } else if (paymentMethod === 'pse') {
                pseFields.style.display = 'block';
            }
        }

        function processPayment() {
            const paymentMethod = document.getElementById('paymentMethod').value;
            if (paymentMethod === 'credit' || paymentMethod === 'debit') {
                alert('Procesando pago con tarjeta...');
                // Aquí puedes agregar la lógica para procesar el pago con tarjeta
            } else if (paymentMethod === 'efecty') {
                alert('Procesando pago con Efecty...');
                // Aquí puedes agregar la lógica para procesar el pago con Efecty
            } else if (paymentMethod === 'pse') {
                alert('Redirigiendo a PSE...');
                // Aquí puedes agregar la lógica para redirigir a la plataforma PSE
            }
        }

        function validateForm() {
            const tipoDivision = document.getElementById('tipoDivision').value;
            const medidas = document.getElementById('medidas').value;
            const color = document.getElementById('color').value;
            const envio = document.getElementById('envio').value;
            const correo = document.getElementById('correo').value;

            if (!tipoDivision || !medidas || !color || !envio || !correo) {
                alert('Por favor, completa todos los campos del formulario.');
                return false;
            }
            return true;
        }

        function validatePaymentForm() {
            const paymentMethod = document.getElementById('paymentMethod').value;
            const cardNumber = document.getElementById('cardNumber').value;
            const cardName = document.getElementById('cardName').value;
            const expiryDate = document.getElementById('expiryDate').value;
            const cvv = document.getElementById('cvv').value;

            if (!paymentMethod) {
                alert('Por favor, selecciona un método de pago.');
                return false;
            }

            if ((paymentMethod === 'credit' || paymentMethod === 'debit') && (!cardNumber || !cardName || !expiryDate || !cvv)) {
                alert('Por favor, completa todos los campos de la tarjeta.');
                return false;
            }

            return true;
        }

        function validateAddProductForm() {
            const productName = document.getElementById('productName').value;
            const productDescription = document.getElementById('productDescription').value;
            const productImage = document.getElementById('productImage').files[0];

            if (!productName || !productDescription || !productImage) {
                alert('Por favor, completa todos los campos del formulario de producto.');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>