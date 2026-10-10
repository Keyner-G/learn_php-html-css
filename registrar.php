
<?php
$conexion = mysqli_connect("localhost","root","","web_local");

 if(!$conexion){

    die("Error de conexion: ".mysqli_connect_error());
 }


$usuario =$_POST['usuario'];
$password = $_POST['password'];

$consulta = "INSERT INTO Registro (user, pass) VALUES (?,?)";

$conp = mysqli_prepare($conexion,$consulta);
mysqli_stmt_bind_param($conp,"ss",$usuario,$password;

if(mysqli_stmt_execute($conp)){

echo "Usuario registrado exitosamente";

}else{

    echo "Error al registrar el usuario";

}
mysqli_stmt_close($conp);

?>
    