<?php
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $n3=$_POST["n2"];
    $ef=$_POST["ef"];
    $tf=$_POST["tf"];

    $errores=[];
    $final=0;

    if(empty($n1)){
        $errores["n1"]="El campo es requerido";
    }elseif (!is_numeric($n1)){
        $errores["n1"]="El valor no es numerico";
    }elseif(strlen($n1)>2){
        $errores["n1"]="El valor no debe superar los 3 digitos";
    }

    if(empty($n2)){
        $errores["n2"]="El campo es requerido";
    }elseif (!is_numeric($n2)){
        $errores["n2"]="El valor no es numerico";
    }elseif(strlen($n2)>2){
        $errores["n2"]="El valor no debe superar los 3 digitos";
    }

    if(empty($n3)){
        $errores["n3"]="El campo es requerido";
    }elseif (!is_numeric($n3)){
        $errores["n3"]="El valor no es numerico";
    }elseif(strlen($n3)>2){
        $errores["n3"]="El valor no debe superar los 3 digitos";
    }
    

    if(empty($ef)){
        $errores["ef"]="El campo es requerido";
    }elseif (!is_numeric($ef)){
        $errores["ef"]="El valor no es numerico";
    }elseif(strlen($ef)>2){
        $errores["ef"]="El valor no debe superar los 3 digitos";
    }

    if(empty($tf)){
        $errores["tf"]="El campo es requerido";
    }elseif (!is_numeric($tf)){
        $errores["tf"]="El valor no es numerico";
    }elseif(strlen($tf)>2){
        $errores["tf"]="El valor no debe superar los 3 digitos";
    }

    if(count($errores)===0){
        $notas=($n1+$n2+$n3)/3;
        $final=($notas*0.55)+($ef*0.30)+($tf*.015);
    }

    echo json_encode([
        'respuesta'=>count($errores)===0,
        'errores'=>$errores,
        'nft'=>$final
    ]);


?>