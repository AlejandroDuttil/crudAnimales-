<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Animales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="background"></div>
    <div id="blur" class="container mt-5">
        <h1 class="text-center">CRUD de Animales</h1>
        <form id="animalForm" class="mt-4">
            <input type="hidden" id="id" name="id">
            <!-- Campo para el nombre del propietario -->
            <div class="form-group">
                <label for="propietario_nombre">Nombre del Propietario:</label>
                <input type="text" class="form-control" id="propietario_nombre" name="propietario_nombre" required>
            </div>
            <!-- Campo para el apellido del propietario -->
            <div class="form-group">
                <label for="propietario_apellido">Apellido del Propietario:</label>
                <input type="text" class="form-control" id="propietario_apellido" name="propietario_apellido" required>
            </div>
            <!-- Campo para el celular del propietario con validación de formato -->
            <div class="form-group">
                <label for="propietario_celular">Celular del Propietario:</label>
                <input type="tel" class="form-control" id="propietario_celular" name="propietario_celular" pattern="[0-9]{10,15}" required>
                <small class="form-text text-muted">Debe ingresar un número de celular válido (10-15 dígitos).</small>
            </div>
            <!-- Campo para el género de la mascota -->
            <div class="form-group">
                <label for="genero_mascota">Género de la Mascota:</label>
                <input type="text" class="form-control" id="genero_mascota" name="genero_mascota" required>
            </div>
            <div class="form-group">
                <label for="tipo_mascota">Tipo de Mascota:</label>
                <select class="form-control" id="tipo_mascota" name="tipo_mascota" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato</option>
                    <option value="Ave">Ave</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nombre_mascota">Nombre de la Mascota:</label>
                <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" required>
            </div>

            <!-- Campo para la fecha de nacimiento de la mascota -->
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            <!-- boton para guardar o actualizar el registro -->
            <button type="button" id="submitBtn" class="btn btn-primary">Guardar</button>
        </form>

        <!-- tabla para mostrar la lista de animales -->
        <table class="table table-bordered mt-4" id="animalTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Propietario</th>
                    <th>Apellido del Propietario</th>
                    <th>Celular del Propietario</th>
                    <th>Género de la Mascota</th>
                    <th>Tipo de Mascota</th>
                    <th>Nombre de la Mascota</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- aqui se cargaran los registros de animales -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
