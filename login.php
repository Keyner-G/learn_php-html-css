<?php
require_once "conexion.php";
$usuario= $_POST['Correo'];
$contra= $_POST['pass'];

$consulta = "SELECT * FROM Registros WHERE user = ?";
 $conp =mysqli_prepare($conexion,$consulta);
 mysqli_stmt_bind_param($conp,'s',$usuario)
 if(mysqli_stmt_execute){
    echo"Consulta ejecutada exitosamente";
 }else{
    echo"Error al ejecutar la consulta";
 }

 $result = mysqli_stmt_get_result($conp);
 $fila = mysqli_fetch_assoc($result);

 if($fila){
    echo"El usuario existe ";

 }else{
    echo"El usuario no existe";
 }

 if($fila){
    if($contra == $fila['passw']){
        echo"Icio de sesion exitoso";


    }else{
        echo"Password incorrecta";
    }

    }else{
        echo"El usuario no existe";
    }
 





?>