<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar formulario</title>
</head>
<body>

    <?php

    if(!empty($_GET['error'])){

        echo '<strong>'. $_GET['error'].'<strong><hr/>';
    }

    ?>
    <h2>VALIDACIÓN DE FORMULARIO</h2>
    <form action="valida.php" method="post">

        <label for="nombre">Nombre:
            <input type="text" name="nombre" id="nombre" maxlength="20" pattern="[A-Za-zñáéíóú ]+" autofocus="autofocus" required="required" placeholder="nombre"/><br/>
        </label><br>
            
        <label for="apellidos">Apellidos:
            <input type="text" name="apellidos" id="apellidos" maxlength="30" pattern="[A-Za-zñáéíóú ]+" required="required" placeholder="apellidos"/><br/>
        </label><br>
            
        <label for="fechaNac">Fecha nacimiento:
            <input type="date" name="fechaNac" id="fechaNac" required="required" placeholder="fecha nacimiento"/><br>
        </label><br>
            
        <label for="residente">Residente en Ceuta:
            <input type="radio" name="residente" id="residente" value="si">Sí</input>
            <input type="radio" name="residente" id="residente" value="no" checked="checked">No</input>
        </label><br>

        <label for="email">Correo electrónico:
            <input type="email" name="correo" id="email" required="required" placeholder="correo"><br>
        </label><br>

        <input type="submit" value="Enviar">


    </form>



</body>
</html>