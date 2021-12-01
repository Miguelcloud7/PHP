<?php
    $cant = $_POST["cantidad"];
    $val = $_POST["valor"];

    $valN = $cant * $val;

    if ($cant > 3) {
        $valT = $valN - ($valN * 0.2);
        echo "Su valor total a pagar es de ".$valT." ya que has recibido un descuento del 20%";
    }else {
        $valT = $valN - ($valN * 0.1);
        echo "Su valor total a pagar es de ".$valT." ya que has recibido un descuento del 10%";
    }
?>