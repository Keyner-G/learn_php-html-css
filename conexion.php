<?php

$conexion = mysqli_connect(
"localhost",
"root",
"",
"web_local"
);

if (!$conexion){
echo "Error de conexion" . mysqli_connect_error;
exit;

}
echo "conexion exitosa";




?>