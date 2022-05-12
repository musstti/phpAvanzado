<!DOCTYPE html>
<html lang="es">

<body>
    <?php 

    include ('header.php');

    ?>

    <div>

        <h2>Informacion de la sesión</h2>

        <?php
        session_start();
        echo 'Usuario actual: '. $_COOKIE['login'].'<br>';
        echo 'Apellidos: '. $_COOKIE['apellidos'].'<br>';
        echo 'Edad: '. $_COOKIE['edad'].'<br>';
        echo 'Password: '. $_COOKIE['pass'].'<br>';
        
        echo '</hr>';
/*
        if(empty($_SESSION['visa'])){
            echo 'Pago Visa: '. $_SESSION['visa'].'off <br>';
        }else if(empty($_SESSION['paypal'])){
            echo 'Pago Paypal: '. $_SESSION['paypal'].'off <br>';
        }else if(empty($_SESSION['bizum'])){
            echo 'Pago Bizum: '. $_SESSION['bizum'].'off <br>';
        }
*/
        if(empty($_COOKIE['login'])){
            echo 'No hay ningún usuario con la sesión abierta <br>';
        }

        //var_dump($_SESSION);
        ?>




    </div>
</body>

</html>