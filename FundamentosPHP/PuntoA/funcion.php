<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

function sumar($num1,$num2,$num3){
    $suma=$num1+$num2+$num3;
    echo ("la suma es ".$suma);
};
sumar($num1,$num2,$num3);


?>