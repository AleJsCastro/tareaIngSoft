<?php
    
    // conexión de la base de datos mysql
    $connectdb = new mysqli("localhost","root","","bdhrdgym");

    if(!$connectdb)
    {
        echo "Error en conectar la base de datos: ".mysqli_connect_error();
    }  
?>