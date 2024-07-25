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

$id = $_GET['id'];

$sql = "SELECT * FROM animales WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo "0 results";
}

$conn->close();
?>
