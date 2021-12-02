<?php
 
 class cafetera{
  public $capacidadMax;
  public $capacidadAct;


    public function __construct(int $capacidadMax=1000, int $capacidadAct=0){
        $this->capacidadM=$capacidadMax;
        $this->capacidadA=$capacidadAct; 
        if(capacidadA>capacidadM);  
        
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

    public function Agregarcafe($cafe){
       $this->capacidadA+=$cafe;
    }

};

$cafetera = new cafetera;

$cafetera -> llenarcafetera();


 
?>