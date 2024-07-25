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

$id = $_POST['id'];
$propietario_nombre = $_POST['propietario_nombre'];
$propietario_apellido = $_POST['propietario_apellido'];
$propietario_celular = $_POST['propietario_celular'];
$genero_mascota = $_POST['genero_mascota'];
$tipo_mascota = $_POST['tipo_mascota'];
$nombre_mascota = $_POST['nombre_mascota'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];  

if ($id) {
    $sql = "UPDATE animales SET propietario_nombre='$propietario_nombre', propietario_apellido='$propietario_apellido', propietario_celular='$propietario_celular', genero_mascota='$genero_mascota', tipo_mascota='$tipo_mascota', nombre_mascota='$nombre_mascota', fecha_nacimiento='$fecha_nacimiento' WHERE id=$id";
} else {
    $sql = "INSERT INTO animales (propietario_nombre, propietario_apellido, propietario_celular, genero_mascota, tipo_mascota, nombre_mascota, fecha_nacimiento) VALUES ('$propietario_nombre', '$propietario_apellido', '$propietario_celular', '$genero_mascota', '$tipo_mascota', '$nombre_mascota', '$fecha_nacimiento')";
}

if ($conn->query($sql) === TRUE) {
    echo "Record saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
