<?php

    if(isset($_REQUEST['codventa'])){

        $codventa = $_REQUEST['codventa'];


        $cnx = mysqli_connect('localhost','root','usuarios')or die("No se pudo conectar con la base de datos");
        $res = $cnx->query("SELECT * FROM ventas WHERE codventa = '$codventa'");

        $json = array();

        foreach($res as $row) {
            $json['datos'][] = $row;
        }

        echo json_encode($json);

    }else{
        echo "Se requiere un codigo de venta para consultar";
    }
?>