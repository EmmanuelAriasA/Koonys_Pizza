<?php
$host_name = "localhost";
$user_name = "root";
$password = "";
$database = "cotizacion";

$conn = mysqli_connect($host_name, $user_name, $password, $database);

if (mysqli_errno($conn)) {
    echo "Error en la conexion a la base de datos";
} else {
    echo "Conexion exitosa";
}

$acentos = $conn->query("SET NAMES 'utf8'");


?>