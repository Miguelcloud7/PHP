<?php
    $Tp = $_POST['cantidad'];
    if($Tp){

        if ($Tp >= 200000) {
            $desc = $Tp * 0.17;
            echo "El total a pagar es de: ".$Tp-$desc." Ya que el cliente ha recibido un descuento de: 17% 😎";
        }else if($Tp < 200000 && $Tp > 0){
            $desc = $Tp * 0.05;
            echo "El total a pagar es de: ".$Tp-$desc." Ya que el cliente ha recibido un descuento de: 5%😔";
        }else{
            echo "Por favor ingrese una cantidad correcta";
        }
    }else{
        echo "Por favor rellene correctamente este campo 😃";
    }

?>