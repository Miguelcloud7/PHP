<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

function sumar($num1,$num2,$num3){
    $suma=$num1+$num2+$num3;
    echo ("la suma es ".$suma);
};
sumar($num1,$num2,$num3);

    $errores=[];
    $resultado=[];
function numerico($num1,$num2,$num3){
    if (!is_numeric($num1)){
        $errores["num1"]="El valor no es numerico";
    }
    elseif(!is_numeric($num2)){
        $errores["num2"]="El valor no es numerico";
    }
    elseif(!is_numeric($num3)){
        $errores["num3"]="El valor no es numerico";
    }
    
}
    // echo json_encode([
    //     'respuesta'=>count($errores)===0,
    //     'errores'=>$errores
    // ]);
?>