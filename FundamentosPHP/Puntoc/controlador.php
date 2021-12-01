<?php
    $n1=$_POST["n1"];
    $n2=$_POST["n2"];
    $n3=$_POST["n2"];
    $ef=$_POST["ef"];
    $tf=$_POST["tf"];

    $errores=[];
    $resultado=[];

    if (!is_numeric($n1)){
        $errores["n1"]="El valor no es numerico";
    }elseif(strlen($n1)>2){
        $errores["n1"]="El valor no debe superar los 3 digitos";
    }
    if (!is_numeric($n2)){
        $errores["n2"]="El valor no es numerico";
    }elseif(strlen($n2)>2){
        $errores["n2"]="El valor no debe superar los 3 digitos";
    }
    if (!is_numeric($n3)){
        $errores["n3"]="El valor no es numerico";
    }elseif(strlen($n3)>2){
        $errores["n3"]="El valor no debe superar los 3 digitos";
    }
    if (!is_numeric($ef)){
        $errores["ef"]="El valor no es numerico";
    }elseif(strlen($ef)>2){
        $errores["ef"]="El valor no debe superar los 3 digitos";
    }
    if (!is_numeric($tf)){
        $errores["tf"]="El valor no es numerico";
    }elseif(strlen($tf)>2){
        $errores["tf"]="El valor no debe superar los 3 digitos";
    }
   


    echo json_encode([
        'respuesta'=>count($errores)===0,
        'errores'=>$errores
    ])

?>