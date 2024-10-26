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
        <h1>Panel de Administración de Reportes</h1>
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
                        Reportes
                    </div>
                    <div class="card-body">
                        <form id="addReportForm">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="tituloReporte">Título del Reporte</label>
                                    <input type="text" class="form-control" id="tituloReporte" required>
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
                                    <button type="submit" class="btn btn-primary">Agregar Reporte</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="reportsTableBody">
                                <script>
                                    // Ejemplo de datos de reportes
                                    let reports = [
                                        { id: 1, titulo: 'Ventas de Octubre 2024', descripcion: 'Resumen de las ventas realizadas durante el mes de octubre de 2024.', fecha: '2024-10-31' },
                                        { id: 2, titulo: 'Inventario de Productos - Octubre 2024', descripcion: 'Estado del inventario de productos al final de octubre de 2024.', fecha: '2024-10-31' },
                                        { id: 3, titulo: 'Incidencias de Calidad - Octubre 2024', descripcion: 'Registro de incidencias de calidad reportadas durante el mes de octubre de 2024.', fecha: '2024-10-31' },
                                        { id: 4, titulo: 'Nuevos Clientes - Octubre 2024', descripcion: 'Listado de nuevos clientes registrados durante el mes de octubre de 2024.', fecha: '2024-10-31' },
                                        { id: 5, titulo: 'Progreso de Proyectos - Octubre 2024', descripcion: 'Estado de los proyectos en curso al final de octubre de 2024.', fecha: '2024-10-31' }
                                    ];
                                
                                    // Función para renderizar los reportes en la tabla
                                    function renderReports() {
                                        const reportsTableBody = document.getElementById('reportsTableBody');
                                        reportsTableBody.innerHTML = '';
                                
                                        reports.forEach(report => {
                                            const row = document.createElement('tr');
                                            row.innerHTML = `
                                                <td>${report.id}</td>
                                                <td>${report.titulo}</td>
                                                <td>${report.descripcion}</td>
                                                <td>${report.fecha}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary" onclick="editReport(${report.id})">Editar</button>
                                                    <button class="btn btn-sm btn-danger" onclick="deleteReport(${report.id})">Eliminar</button>
                                                </td>
                                            `;
                                            reportsTableBody.appendChild(row);
                                        });
                                    }

                                    // Función para editar un reporte
                                    function editReport(id) {
                                        const report = reports.find(report => report.id === id);
                                        if (report) {
                                            document.getElementById('tituloReporte').value = report.titulo;
                                            document.getElementById('descripcion').value = report.descripcion;
                                            document.getElementById('fecha').value = report.fecha;
                                            document.getElementById('addReportForm').dataset.editingId = id;
                                        }
                                    }
                                
                                    // Función para eliminar un reporte
                                    function deleteReport(id) {
                                        const index = reports.findIndex(report => report.id === id);
                                        if (index !== -1) {
                                            reports.splice(index, 1);
                                            renderReports();
                                        }
                                    }

                                    // Función para agregar o actualizar un reporte
                                    function addOrUpdateReport(event) {
                                        event.preventDefault();
                                        const titulo = document.getElementById('tituloReporte').value;
                                        const descripcion = document.getElementById('descripcion').value;
                                        const fecha = document.getElementById('fecha').value;
                                        const editingId = document.getElementById('addReportForm').dataset.editingId;

                                        if (editingId) {
                                            // Actualizar reporte existente
                                            const report = reports.find(report => report.id == editingId);
                                            if (report) {
                                                report.titulo = titulo;
                                                report.descripcion = descripcion;
                                                report.fecha = fecha;
                                            }
                                            delete document.getElementById('addReportForm').dataset.editingId;
                                        } else {
                                            // Agregar nuevo reporte
                                            const newReport = {
                                                id: reports.length ? reports[reports.length - 1].id + 1 : 1,
                                                titulo,
                                                descripcion,
                                                fecha
                                            };
                                            reports.push(newReport);
                                        }

                                        renderReports();
                                        document.getElementById('addReportForm').reset();
                                    }

                                    // Renderizar los reportes al cargar la página
                                    document.addEventListener('DOMContentLoaded', () => {
                                        renderReports();
                                        document.getElementById('addReportForm').addEventListener('submit', addOrUpdateReport);
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