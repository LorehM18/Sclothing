<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "producto"; 


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql="SELECT * FROM productos";
$consulta=$conn->query($sql);


