<?php
require_once "calculos.php";
  $empleado=$_POST['salario'];
  $ahorro=$_POST['ahorro'];


  $errores=[];
  $salud=0;
  $pensiones=0;

    if(empty($empleado)){
    $errores["empleado"]="El campo es requerido";
    }elseif (!is_numeric($empleado)){
    $errores["empleado"]="El valor no es numerico";
    }elseif(strlen($empleado)>10){
    $errores["empleado"]="El valor no debe superar los 10 digitos";
    }

    if(empty($ahorro)){
    $errores["ahorro"]="El campo es requerido";
    }elseif (!is_numeric($ahorro)){
    $errores["ahorro"]="El valor no es numerico";
    }elseif(strlen($ahorro)>10){
    $errores["ahorro"]="El valor no debe superar los 10 digitos";
    }
  
    if(count($errores)===0){
        $lista=calculos\calculosM($empleado);
    }

    echo json_encode([
        'respuesta'=>count($errores)===0,
        'errores'=>$errores,
        'x'=>$lista
    ])

?>