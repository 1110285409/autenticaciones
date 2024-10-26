<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías - Vidrios Y Aceros Sandra</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Categorías</h2>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">Crear contactanos</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Contactanos as $contactano)
                    <tr>
                        <td>{{ $contactano->id }}</td>
                        <td>{{ $contactano->nombre }}</td>
                        <td>{{ $contactano->descripcion }}</td>
                        <td>
                            @if($contactano->imagen)
                                <img src="{{ Storage::url($contactano->imagen) }}" alt="{{ $contactano->nombre }}" width="100">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('contactano.edit', $contactano->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('contactano.destroy', $contactano->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
