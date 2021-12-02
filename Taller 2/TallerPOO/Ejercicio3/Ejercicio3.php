<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio3</title>
</head>
<body>
    
</body>
</html>

<?php
 
 class cafetera{
  public $capacidadMax;
  public $capacidadAct;


   public function __construct(int $capacidadAct=0,int $capacidadMax=1000 ){
    $this->capacidad=$capacidadMax;
    $this->actual=$capacidadAct; 
     
    
}

    public function ajustar(){
        $c=$this->capacidad;
        $a=$this->actual;
    if($a>$c){
        $i=$a=$c;
        echo "capacidad actual: ",$i;
    }
}
    public function llenarcafetera(){
        $cap= $this->capacidad;
          echo "la cafetera esta llena, capacidad: ",$cap;
    }
      
    public function Servirtaza(int $servir){
        $cap= $this->capacidad;
        echo "sirviendo taza......<br>";
        if($servir<$cap){
        echo "no hay suficiente en la taza, cantidad: ", $servir,"<br>";
        echo "Terminando de llenar, cantidad: ",$cap;
        }elseif($servir>$cap){
            $ca=$servir=$cap;
            echo "la taza ya esta llena: ",$ca;
        }

    }

    public function Vaciarcafetera(){
        $cap= $this->capacidad;
        $vaciar=$cap=0;
        echo "la cafetera esta vacia, cantidad:  ",$vaciar;
    }

    public function Agregarcafe($capacidadAct){
       echo"usted agrego: ",$capacidadAct,"  gramos"," de cafe";
    }

};

$cafetera = new cafetera();

$cafetera -> Servirtaza(200)




 
?>

