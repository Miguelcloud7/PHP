<?php
    class Persona{

        private string $documento="";
        private string $nombre="";
        private int $edad=0;
        private string $sexo="M";
        private float $peso=0.0;
        private float $altura=0.0;
        private int $DNI=0;

        // function __construct()
        // {
            
        // }

        // function __construct0(string $documento,string $nombre,int $edad,string $sexo)
        // {
        //     $this->documento=$documento;
        //     $this->nombre=$nombre;
        //     $this->edad=$edad;
        //     $this->sexo=$sexo;
        // }

        function __construct($documento, $nombre, $edad, $sexo, $peso, $altura, $DNI)
        {
            $this->documento=$documento;
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->sexo=$sexo;
            $this->peso=$peso;
            $this->altura=$altura;
            $this->DNI=$DNI;
        }

        public function calcularIMC(){
            $IMC=$this->peso/(($this->altura)**2);
            $r=0;
            if($IMC<18.5){
                $r=-1;
            }elseif($IMC>=18.5 and $IMC<=24.9){
                $r=0;
            }elseif($IMC>=25.0 and $IMC<=29.9){
                $r=1;
            }
            elseif($IMC>=30.0 and $IMC<=39.9){
                $r=2;
            }
            elseif($IMC>=40.0){
                $r=3;
            }
        }
        public function esMayorDeEdad(){
            if($this->edad>=18){
                return true;
            }else{
                return false;
            }
        }

        public function comprobarSexo(){
            if($this->sexo=="M" or $this->sexo=="F"){
                echo "El sexo es correcto";
            }else{
                echo "El sexo que usted ingreso '"+$this->sexo+"' no es valido ahora es M";
                $this->sexo="M";
            }
        }

        public function listarInformacion(){
            $txt="El documento es: ".$this->documento."<br>El nombre es:".$this->nombre."<br> La edad es: ".$this->edad." <br> El sexo es: ".$this->sexo." <br> El peso es: ".$this->peso." <br> La altura es: ".$this->altura." <br> El DNI ES: ".$this->DNI."'";
            echo($txt);
        
        }

        public function generaDNI(){
            $cont=0;
            $cont+=1;
            $this->DNI=$cont;
        }
       
    }

    $x = new Persona();
    $s= new Persona("323223","David",17,"M",50,175,0);
    $x->listarInformacion();
    echo("<br><br>");
    $s->listarInformacion();
?>