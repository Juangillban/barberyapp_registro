<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pruebabarberyapp";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Si la conexión es exitosa, podrías agregar un mensaje opcional (solo para pruebas)
// echo "Conexión exitosa";

?>