<?php

    include "Config/Conexion.php";

    $nombretelefono =$_POST["Nombre"];
    $descripcionTelefono = $_POST["Descripcion"];
    $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $sql = "INSERT INTO `crud` ( Nombre , Descripcion , Imagen) VALUES ('$nombretelefono','$descripcionTelefono','$imagen')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: admin.php');
    }else {
        echo "No se insertaron los datos";
    }

 

