<!DOCTYPE html>
<html lang="es">

<body>
    <?php 

    include ('header.php');

    ?>

    <div>

        <h2>Login</h2>

        <?php
        //session_start();
        if(!empty($_COOKIE['login'])){
            echo '<p>Se ha iniciado sesion con el usuario '. $_COOKIE['login']. '<p>';
            echo '<p>Introduzca otro usuario si desea cambiar<p>';
        }



        ?>


        <form action="procesalogin.php" method="POST">
            Nombre:
            <input type="text" name="login" autofocus>
            Apellidos:
            <input type="text" name="apellidos">
            Edad:
            <input type="number" name="edad" ><br><br>
            Contraseña:
            <input type="password" name="pass" required="required" minlength="5">
            
            
            <br><br>Pago:<br><br>
            <input type="checkbox" name="visa" id="visa">
            <label for="visa">Visa</label><br>
            <input type="checkbox" name="paypal" id="">
            <label for="visa">Paypal</label><br>
            <input type="checkbox" name="bizum" id="">
            <label for="visa">Bizum</label><br>
            



            <input type="submit" value="Login">
        </form>


    </div>
</body>

</html>