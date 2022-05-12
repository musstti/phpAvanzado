<?php

//session_start();

echo $_POST['login'];
echo $_POST['apellidos'];
echo $_POST['edad'];
echo $_POST['pass'];


if(empty($_COOKIE['login'])){
    setcookie('login', $_POST['login'],time()+60.60*24*365);
    
}else {
    echo "Error Fatal";
}

if(empty($_COOKIE['apellidos'])){
    setcookie('apellidos', $_POST['apellidos'],time()+60.60*24*365);
    
}else {
    echo "Error Fatal";
}


if(empty($_COOKIE['edad'])){
    setcookie('edad', $_POST['edad'],time()+60.60*24*365);
    
    
}else {
    echo "Error Fatal";
}

if(empty($_COOKIE['pass'])){
    setcookie('pass', $_POST['pass'],time()+60.60*24*365);
    header('Location: index.php');
    
}else {
    echo "Error Fatal";
}



?>