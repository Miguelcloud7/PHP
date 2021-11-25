<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$fec_nac = $_POST['fec_nac'];
if ($nombre != "" && $direccion !="" && $fec_nac !="") {
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
?>