<?php
$total = $_POST['total'];
$desc = $_POST['desc'];

function ivaFun($total){
    $iva=$total*0.19;
    $totalIva= $iva+$total;
    return ($totalIva);
}

    $errores=[];

    if(empty($total)){
        $errores["total"]="El campo es requerido";
    }elseif (!is_numeric($total)) {
        $errores["total"]="El valor no es numerico";
    }
    elseif ($desc!='si' or $desc!='no') {
        $errores["desc"]="Valor invalido solo 'si' o 'no'";
    }
    if (count($errores)==0) {
        if ($desc=='si') {
            $de10=$total*0.10;
            $toda10= $total-$de10;

            $x=ivaFun($toda10);
            echo json_encode([
                'respuesta'=>count($errores)===0,
                'errores'=>$errores,
                'nft'=>$x
            ]);
        }
        else {
            $totalTodo=ivaFun($total);
        echo json_encode([
            'respuesta'=>count($errores)===0,
            'errores'=>$errores,
            'nft'=>$totalTodo
        ]);
    }
    }else{
        echo json_encode([
            'respuesta'=>count($errores)===0,
            'errores'=>$errores,
        ]);
    }

?>
