<?php
// Conexión a la base de datos 
include 'conexion.php';
 
// Recibir ID del producto a borrar
$idBorrar = $_POST['id-borrar'];
 
// Borrar producto de la base de datos
$sql = "DELETE FROM productos WHERE id=$idBorrar";
 
if ($conn->query($sql) === TRUE) {
    echo "Producto borrado correctamente";
} else {
    echo "Error al borrar producto: " . $conn->error;
}
 
$conn->close();
?>

