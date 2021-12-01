<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$fec_nac = $_POST['fec_nac'];
$dia = substr($fec_nac, 8, 2);
$mes = substr($fec_nac, 5, 2);
$año = substr($fec_nac, 0, 4);
if ($nombre != "" && $direccion !="" && $fec_nac !="") {
    if (!is_numeric($nombre) && !is_numeric($direccion)){
        if (is_numeric($fec_nac)){
            echo "Por favor respete del campo de fecha 😊 \n";
        }elseif (is_string($nombre) && is_string($direccion) && checkdate($mes, $dia, $año)) {
            $fec_actual = date("Y-m-d");
            $conv = abs(strtotime($fec_nac)-strtotime($fec_actual));
            $edad  = floor($conv / (365 * 60 * 60 * 24));
            if($edad > 3){
                if ($edad>=18) {
                    $mayor = "mayor de edad";
                }else{
                    $mayor = "menor de edad";
                }
                echo "El aprendiz ".ucfirst($nombre)."\ncon dirección: ".$direccion."\ntiene una edad de ".$edad." años por lo que es ".$mayor." ya que nacio en la fecha: ".$fec_nac." 💝";
            }else{
                echo "No se admiten Aprendices menores a 3 años de edad 🙄";
            }
        }
    }else{
        if (is_numeric($fec_nac)){
            echo "Por favor respete del campo de fecha 😊\n";
        }
            echo "Por favor rellene los campos de nombre o dirección con valores de texto 🤠";
    }
}
?>