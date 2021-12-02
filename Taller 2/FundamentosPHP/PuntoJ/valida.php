<?php
    $Tp = $_POST['cantidad'];
    $cont = $_POST['contadorJ'];
    if($Tp){
        if(is_numeric($Tp)){
            if(strlen($Tp) > 2){
                if ($Tp >= 200000) {
                    $desc = $Tp * 0.17;
                    echo "El total a pagar es de: ".$Tp-$desc." Ya que el cliente ha recibido un descuento de: 17% 😎";
                }else if($Tp < 200000 && $Tp > 0){
                    $desc = $Tp * 0.05;
                    echo "El total a pagar es de: ".$Tp-$desc." Ya que el cliente ha recibido un descuento de: 5%😔";
                }else{
                    echo "Por favor ingrese una cantidad correcta";
                }
            }
            else{
                echo "El minimo de digitos aceptados es 3";
            }
        }else{
            echo "Por favor rellene los campos con formato númerico 😃";
        }
    }else{
        echo "Por favor rellene correctamente este campo 😃";
    }

?>