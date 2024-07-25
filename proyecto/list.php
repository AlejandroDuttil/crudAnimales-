<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dutil_alejandro_1ra";

// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM animales";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['propietario_nombre']}</td>
                <td>{$row['propietario_apellido']}</td>
                <td>{$row['propietario_celular']}</td>
                <td>{$row['genero_mascota']}</td>
                <td>{$row['tipo_mascota']}</td>
                <td>{$row['nombre_mascota']}</td>
                <td>{$row['fecha_nacimiento']}</td> <!-- Nuevo campo -->
                <td>
                    <button class='edit-btn btn btn-warning' data-id='{$row['id']}'>Editar</button>
                    <button class='delete-btn btn btn-danger' data-id='{$row['id']}'>Eliminar</button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='9' class='text-center'>No hay registros</td></tr>";
}

$conn->close();
?>
