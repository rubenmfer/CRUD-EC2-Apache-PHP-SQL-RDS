<?php
// Conexión a la base de datos
include 'conexion.php';
 
// Recibir datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
 
// Insertar datos en la base de datos
$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
 
if ($conn->query($sql) === TRUE) {
    echo "Producto agregado correctamente";
} else {
    echo "Error al agregar producto: " . $conn->error;
}
 
$conn->close();
?>

