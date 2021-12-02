<?php
 
 class cafetera{
  public $capacidadMax;
  public $capacidadAct;


  public function __construct0(){
    $this->capacidadM=1000;
    $this->capacidadA=0; 
    $this->__construct1;
     
    
}

  public function __construct1($capacidadAct,$capacidadMax){
    $this->actual=$capacidadAct;
    $this->capacidad=$capacidadMax;
    
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
        $capacidad= $this->capacidadM;
          echo "la cafetera esta llena, capacidad: ",$capacidad;
    }
      
    public function Servirtaza(int $servir){
        $capacidad= $this->capacidadM;
        echo "sirviendo taza......<br>";
        if($servir<$capacidad){
        echo "no hay suficiente en la taza, cantidad: ", $servir,"<br>";
        echo "Terminando de llenar, cantidad: ",$capacidad;
        }elseif($servir>$capacidad){
            $ca=$servir=$capacidad;
            echo "la taza ya esta llena: ",$ca;
        }

    }

    public function Vaciarcafetera(){
        $capacidad= $this->capacidadM;
        $vaciar=$capacidad=0;
        echo "la cafetera esta vacia, cantidad:  ",$vaciar;
    }

    public function Agregarcafe($capacidadAct){
       echo"usted agrego: ",$capacidadAct,"  gramos"," de cafe";
    }

};

$cafetera = new cafetera(1100,1000);




 
?>

