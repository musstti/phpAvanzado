<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="indexCSS.css">
</head>
<body>
<?php
   
   $nombre=$_POST['nombre'];
   $apellidos=$_POST['apellidos'];
   
   
   ?>
   
   
   <h2 class="h2php">Gracias <?php echo $nombre.'por rellenar el formulario'?></h2>

    <p class="pphp">Puntúa el formulario. Gracias.</p>

<select name="puntuacion" class="puntuacion">
    <option value="insuficiente">0-4</option>
    <option value="suficiente">5</option>
    <option value="bien">6</option>
    <option value="notable">7-8</option>
    <option value="sobresaliente">9-10</option>
</select>

</body>
</html>
 
