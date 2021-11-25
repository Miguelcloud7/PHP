<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 camisas</title>
</head>
<body>
<form action="Ejercicio(i).php" method="get">
        <input type="text" name="c1" id="not1" placeholder="Ingrese la nota 1: ">
 
        <input type="submit" value="Enviar">
</form>

<?php
    $v1=0;
    $v1 = $_GET['c1'];
    $i=0;
while ($camisas <= $v1){
 $i++;
        if($camisas > 3 ){
             $sumac=$v1;
             $desc=$sumac/20;
            echo "el total por las camisas es: ".$desc;
        }else{
            $sumac=$v1;
            $desc=$sumac/10;
           echo "el total por las camisas es: ".$desc;
        };

};
        

    ?>
</body>
</html>