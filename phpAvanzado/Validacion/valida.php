<?php

$error = 'Rellene todos los campos';

if(isset($_POST['nombre'])&&isset($_POST['apellidos'])&&isset($_POST['fechaNac'])&&isset($_POST['residente'])&&isset($_POST['correo'])){

    $error = '';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNac = $_POST['fechaNac'];
    $residente = $_POST['residente'];
    if($_POST['residente']=='si'){
        $residente = true;
    }else{
        $residente = false;
    }
    $correo = $_POST['correo'];

}

if(strlen($nombre)>20 || !preg_match('/[A-Za-zñáéíóú]+/',$nombre)){
    $error = 'Formato inválido de nombre';
}

if(strlen($apellidos)>20 || !preg_match('/[A-Za-zñáéíóú]+/',$apellidos)){
    $error = 'Formato inválido de apellidos';
}

if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
    $error = 'Formato inválido de email';
}

if($error !=''){
    header('Location: index.php?error='.$error);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>DATOS CORRECTOS!!</h1>
    <br>
    Nombre: <?=$nombre?><br>
    Apellidos: <?=$apellidos?><br>
    Fecha de nacimiento: <?=$fechaNac?><br>
    Residente: <?php
        if($residente){
            echo 'SI';
        }else{
            echo 'NO';
        }
    ?><br>
    Correo electrónico: <?=$correo?><br>
</body>
</html>