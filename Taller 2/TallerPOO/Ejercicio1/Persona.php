<?php
    class Persona{

        private $documento="";
        private $nombre="";
        private $edad=0;
        private $sexo="M";
        private $peso=0.0;
        private $altura=0.0;
        private $DNI=0;

        function __construct()
        {
            
        }

        function __construct1($documento,$nombre,$edad,$sexo)
        {
            $this->documento=$documento;
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->sexo=$sexo;
        }

        function __construct2($documento,$nombre,$edad,$sexo,$peso,$altura,$DNI)
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
            echo "El documento es: '"+$this->documento+"' <br>, El nombre es: '"+$this->nombre+"'<br> La edad es '"+$this->edad+"' <br> El sexo es: '"+$this->sexo+"' <br> El peso es: '"+$this->peso+"' <br> La altura es: '"+$this->altura+"' <br> El DNI ES: '"+$this->DNI+"'";
        }

        public function generaDNI(){
            $cont=0;
            $cont+=1;
            $this->DNI=$cont;
        }
       
    }



    MiPersona = new Persona("232323","David",17, "M", 50.0, 170.5,0);

    Mipersona->listarInformacion()
,?>