<?php

    $codventa = $_REQUEST['codventa'];
    $fecha = $_REQUEST['fecha'];
    $usr = $_REQUEST['usr'];

    $cnx = mysqli_connect('localhost','root','bdusuarios') or die('No se pudo conectar con la base de datos :D');
    $result = mysqli_query($cnx,"select * from ventas where codventa =  '$codventa'");
    if(mysqli_num_rows($result) == 0){
        mysqli_query($cnx,"INSERT INTO ventas VALUES('$codventa','$fecha','$usr')");
    }else{
        echo "Codigo de venta ya existe....";
    }

    mysqli_close($cnx);
?>

