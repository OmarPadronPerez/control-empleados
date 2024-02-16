<?php

$servidor="localhost";
$baseDeDatos= "empleados";
$usuario="user";
$contrasena= "";

try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasena);
}catch(PDOException $e) {
    echo $e->getMessage();
}

?>