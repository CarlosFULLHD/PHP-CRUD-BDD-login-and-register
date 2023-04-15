<?php


error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));


$sql = "UPDATE crud SET 
Nombre = '$Nombre', 
Descripcion = '$Descripcion',
Imagen = '$imagen' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:admin.php");
}else {
    echo "No se insertaron lod datos";
}