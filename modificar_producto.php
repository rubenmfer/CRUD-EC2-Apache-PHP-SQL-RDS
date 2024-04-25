<?php
// Conexión a la base de datos
include 'conexion.php';

 
// Recibir datos del formulario
$id = $_POST['id'];
$nuevoNombre = $_POST['nuevo-nombre'];
$nuevoPrecio = $_POST['nuevo-precio'];
 
// Actualizar datos en la base de datos
$sql = "UPDATE productos SET nombre='$nuevoNombre', precio='$nuevoPrecio' WHERE id=$id";
 
if ($conn->query($sql) === TRUE) {
    echo "Producto modificado correctamente";
} else {
    echo "Error al modificar producto: " . $conn->error;
}
 
$conn->close();
?>


