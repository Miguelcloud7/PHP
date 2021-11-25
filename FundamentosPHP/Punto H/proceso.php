<?php
    $nota1 = $_POST['n1'];
    $nota2 = $_POST['n2'];
    $nota3 = $_POST['n3'];
    $nota4 = $_POST['n4'];
 
    
        $sumar = $nota1+$nota2+$nota3+$nota4;

        $sumarnotas = $sumar/4;

        if($sumarnotas<=3.5){
            echo "usted esta reprobado ".$sumarnotas;
        }else{
            echo "usted esta aprobado ".$sumarnotas;
        }

    
        

    ?>