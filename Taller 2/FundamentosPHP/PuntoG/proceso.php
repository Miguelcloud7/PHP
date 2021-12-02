<?php
    $Salario = $_POST['dato'];

    if(is_numeric($Salario)){
        if(strlen($Salario)>2){
            if($Salario>=2000000){   
                $x= $Salario/10;
                $vf = $Salario-$x;
                echo "Su salario es: ". $vf ;
            }else{
                echo "Su salario es: " . $Salario;
            }
        }
    }else{
        echo "Por favor ingrese valores númericos";
    }
?>