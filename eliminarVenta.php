<?php

    if(isset($_REQUEST['codventa'])){
        $codventa = $_REQUEST['codventa'];
        $cnx =  mysqli_connect("localhost","root","","usuarios") or die("Ha sucedido un error inesperado en la conexion");
        $result = mysqli_query($cnx,"select codventa from ventas where codventa = '$codventa'");
        if(mysqli_num_rows($result) > 0){
            mysqli_query($cnx,"DELETE FROM ventas WHERE codventa = '$codventa'");
        }else{
            echo "codigo de factura no existe";
        }
    }else{
        echo "Debe especificar un codigo de venta";
    }


?>



