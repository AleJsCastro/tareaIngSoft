<?php
require 'db.php';
//variables extaridas desde el index
$user= $_POST["user"];
$password= $_POST["password"];
// creacion del query para consultar  a la base de datos
$query= mysqli_query($connet_mydb, "SELECT * FROM usuario where nombreuser = ".$user." and password=".$password."');

$nrFila= mysqli_num_rows($query);

if($query == 1)
{
    echo "bienvenido ";
}
else
{
    echo "no estas registrado ";
}

?>