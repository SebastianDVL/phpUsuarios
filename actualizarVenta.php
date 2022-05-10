<?php
    if(isset($_request['codventa']) && isset($_request['fecha']) && isset($_request['usr'])){
        $codventa = $_request['codventa'];
        $fecha = $_request['fecha'];
        $usr = $_request['usr'];

        $cnx = mysqli_connect('localhost','root','usuarios') or die("No se pudo conectar a la base de datos");
        $result = mysqli_query($cnx,"SELECT * FROM ventas WHERE codventa = '$codventa'");

        if(mysqli_num_rows($result) > 0){
            mysqli_query($cnx,"UPDATE ventas SET fecha = '$fecha',usr = '$usr' WHERE codventa = '$codventa'");
        }else{
            echo "Factura no existe";
        }
    }else{
        echo "Todos los datos son necesarios...";
    }
?>