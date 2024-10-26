<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto - Vidrios Y Aceros Sandra</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
        }
        .btn-primary, .btn-success {
            border-radius: 20px;
        }
        .form-control {
            border-radius: 10px;
        }
        .form-group label {
            font-weight: bold;
        }
        .additional-form {
            display: none;
        }
    </style>
</head>
<body>
    <main class="container mt-5">
        <h2>Formulario de Contacto</h2>
        <form id="contact-form" class="mt-4" onsubmit="return validateForm()">
            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Información Personal</legend>
                <div class="form-group">
                    <label for="name">Nombre Completo:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Tipo de Solicitud</legend>
                <div class="form-group">
                    <label for="request-type">Tipo de Solicitud:</label>
                    <select class="form-control" id="request-type" name="request-type" required onchange="showAdditionalForm()">
                        <option value="">Selecciona una opción</option>
                        <option value="peticion">Petición</option>
                        <option value="quejas">Quejas</option>
                        <option value="reclamos">Reclamos</option>
                        <option value="sugerencias">Sugerencias</option>
                    </select>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Detalles de la Solicitud</legend>
                <div class="form-group">
                    <label for="subject">Asunto:</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4 additional-form" id="peticion-form">
                <legend class="w-auto">Detalles de la Petición</legend>
                <div class="form-group">
                    <label for="peticion-details">Detalles de la Petición:</label>
                    <textarea class="form-control" id="peticion-details" name="peticion-details" rows="4"></textarea>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4 additional-form" id="quejas-form">
                <legend class="w-auto">Detalles de la Queja</legend>
                <div class="form-group">
                    <label for="quejas-details">Detalles de la Queja:</label>
                    <textarea class="form-control" id="quejas-details" name="quejas-details" rows="4"></textarea>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4 additional-form" id="reclamos-form">
                <legend class="w-auto">Detalles del Reclamo</legend>
                <div class="form-group">
                    <label for="reclamos-details">Detalles del Reclamo:</label>
                    <textarea class="form-control" id="reclamos-details" name="reclamos-details" rows="4"></textarea>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4 additional-form" id="sugerencias-form">
                <legend class="w-auto">Detalles de la Sugerencia</legend>
                <div class="form-group">
                    <label for="sugerencias-details">Detalles de la Sugerencia:</label>
                    <textarea class="form-control" id="sugerencias-details" name="sugerencias-details" rows="4"></textarea>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Formulario Devoluciones</legend>
                <div class="form-group">
                    <label for="devoluciones-details">Detalles de la Devolución:</label>
                    <textarea class="form-control" id="devoluciones-details" name="devoluciones-details" rows="4"></textarea>
                </div>
            </fieldset>

            <fieldset class="border p-4 mb-4">
                <legend class="w-auto">Consentimiento</legend>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                    <label class="form-check-label" for="consent">Acepto los términos y condiciones y las políticas de privacidad</label>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="button" class="btn btn-primary" onclick="callUs()">Te llamamos</button>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showAdditionalForm() {
            var requestType = document.getElementById('request-type').value;
            var forms = document.querySelectorAll('.additional-form');
            
            forms.forEach(function(form) {
                form.style.display = 'none';
            });

            if (requestType === 'peticion') {
                document.getElementById('peticion-form').style.display = 'block';
            } else if (requestType === 'quejas') {
                document.getElementById('quejas-form').style.display = 'block';
            } else if (requestType === 'reclamos') {
                document.getElementById('reclamos-form').style.display = 'block';
            } else if (requestType === 'sugerencias') {
                document.getElementById('sugerencias-form').style.display = 'block';
            }
        }

        function validateForm() {
            // Validación adicional si es necesario
            alert('Formulario enviado con éxito');
            return false; // Evitar el envío real del formulario para demostración
        }

        function callUs() {
            alert('Nos pondremos en contacto contigo pronto.');
        }
    </script>
</body>
</html>
