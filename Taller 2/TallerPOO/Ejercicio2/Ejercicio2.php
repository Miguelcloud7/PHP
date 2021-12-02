<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
<div class="datos list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      
  </a>
</div>
<div class="togger"><i class="fas fa-bars"></i></div>
<div></div>
<script>
var menu = document.querySelector('.togger');
var datos = document.querySelector('.datos');
menu.onclick=function () {
    menu.classList.toggle('activar');
    datos.classList.toggle('activar');
}
</script>
</body>
</html>
<?php 
class cuentaBancaria {
    var $nombreCuenta = "";
    var $docId = "";
    var $saldoActual = 0;
    var $interes = 0;
    function __construct(){
        
    }
    function registrarDatos(){

    }
    function actualizarSaldo(){
        $saldoActual = this->$saldoActual + this->$interes/365;
    }
    function ingresar($cant){
        $saldoActual = this->$saldoActual + $cant;
    }
    function retirar($cant){
        if ($saldoActual > 0) {
            if ($cant < $saldoActual) {
                $saldoActual = this->$saldoActual - $cant;
            }
        }
    }
    function datos(){
        echo '<h5 class="mb-1">Nombre</h5>
        <small>Documento</small>
      </div>
      <p class="mb-1">Saldo</p>
      <small>Interes</small>';
    }
}

?>