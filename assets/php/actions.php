<?php

include "database.php";

$nombre = $_POST['name'] ?? null;
$apellido = $_POST['lastname'] ?? null;
$correo = $_POST['email'] ?? null;
$celular = $_POST['phone'] ?? null;
$mensaje = $_POST['message'] ?? null;

$sql = "INSERT INTO contacto (nombre, apellido, correo, celular, mensaje) VALUES ('$nombre', '$apellido', '$correo', '$celular', '$mensaje');";


if ($conn->query($sql) == true) {
    header('location: /pizzeria/index.html');
} else {
    echo "Error al enviar el mensaje, ez";
}

$conn->close();

?>