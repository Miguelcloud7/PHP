<?php
require_once "calculos.php";
  $empleado=$_POST['empleado'];
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
        $a=$lista[0];
        $b=$lista[1];
        $c=$lista[2];
        $d=$lista[3];
        $e=$lista[4];
        echo json_encode([
            'respuesta'=>count($errores)===0,
            'errores'=>$errores,
            'salud'=>$a,
            'tsalud'=>$b,
            'pension'=>$c,
            'tpension'=>$d,
            'total'=>$e,
            'salario'=>$empleado,
            'ahorro'=>$ahorro
        ]);
    }else{
        echo json_encode([
            'respuesta'=>count($errores)===0,
            'errores'=>$errores
        ]);
    }

    

?>