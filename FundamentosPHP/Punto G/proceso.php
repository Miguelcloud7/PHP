<?php
    $Salario = $_GET['d1'];

    if($Salario>2000000){   
        $x= $Salario/10;
        $vf = $Salario-$x;
        echo "Su salario es: ". $vf ;
    }else{
        echo "Su salario es: " . $Salario;
}
?>