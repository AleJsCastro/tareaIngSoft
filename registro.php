<?php
//incluimos la conección de la base de datos
include 'db.php';

// creación de variables
$iddatos1= $_POST['ref1cedula'];
$usuario1= $_POST['ref1usuario'];
$password1= $_POST['ref1password'];
$rol1=$_POST['ref1rol'];


if(isset($_POST['reflogin']))
{
    $passEncriptada = password_hash($password1, PASSWORD_DEFAULT);
   
    $queryregistrar2 = "INSERT INTO usuario (id_user, nombreUser, password, rol_roles)
    values('$iddatos1','$usuario1','$passEncriptada','$rol1')";

    if(mysqli_query($connectdb, $queryregistrar2 ))
    {
        echo "<script>document.write('REGISTRADO EL USUARIO: ','$usuario1');</script>";
    }
    else 
    {
        echo "ERROR <br />No se puede acceder a la Base de datos";
    }
}
?>