<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

function sumar($num1,$num2,$num3){
    $suma=$num1+$num2+$num3;
    return("la suma es ".$suma);
}


    $errores=[];

    if(empty($num1)){
        $errores["num1"]="El campo es requerido";
    }elseif (!is_numeric($num1)){
        $errores["num1"]="El valor no es numerico";
    }

    if(empty($num2)){
        $errores["num2"]="El campo es requerido";
    }elseif (!is_numeric($num2)){
        $errores["num2"]="El valor no es numerico";
    }

    if(empty($num3)){
        $errores["num3"]="El campo es requerido";
    }elseif (!is_numeric($num3)){
        $errores["num3"]="El valor no es numerico";
    }


    if(count($errores)==0){
        $cosa=sumar($num1,$num2,$num3);
        echo json_encode([
            'respuesta'=>count($errores)===0,
            'errores'=>$errores,
            'nft'=>$cosa
        ]);
    }else{
        echo json_encode([
            'respuesta'=>count($errores)===0,
            'errores'=>$errores,
        ]);
    }
    
?>