<?php

$servername = "XXXXXXXXXXX";
$username = "XXXXXXXXXXX";
$password = "XXXXXXXXXXX";
$dbname = "XXXXXXXXXXX";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>
