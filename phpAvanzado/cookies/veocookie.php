<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Ejemplo cookie</title>
    </head>

    <body>

        <?php

        if(isset($_COOKIE['moneda'])){
            echo 'La moneda elegida es '. $_COOKIE['moneda'];
        }else{
            echo 'No existe moneda elegida';
        }

        ?>


    </body>

</html>