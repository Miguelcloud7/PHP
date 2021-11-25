<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

function sumar($num1,$num2,$num3){
    $suma=$num1+$num2+$num3;
    return ("la suma es ".$suma);
};
$r=sumar($num1,$num2,$num3);
echo ($r);
?>