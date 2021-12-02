<?php
    $x=$_POST['precio'];
    if(!empty($x)){
        if(is_numeric($x)){
            if (strlen($x) >= 4) {
                $iva = $x*19/100;
                $desc = $x*10/100;
                if ($x >= 1000000) {
                    echo "El total a pagar es: ".$x-$desc+$iva;
                }else{
                    echo "El total a pagar es: ".$x+$iva;
                }
            }else{
                echo "El minimo de digitos permitido es de 4";
            }
        }else{
            echo "Por favor digite campos númericos";
        }
    }else{
        echo "Por favor no deje los campos vacios";
    }
?>