<?php 
class cuentaBancaria {
    private $nombreCuenta;
    private $docId;
    private $saldoActual;
    private $interes;
    function __construct($nombreCuenta, $docId, $saldo, $interes){
        $this->nombreCuenta = $nombreCuenta;
        $this->docId = $docId;
        $this->saldo = $saldo;
        $this->interes = $interes;
    }
    function actualizarSaldo(){
        $this->saldoActual = $this->saldoActual - ($this->interes/100)/365;
        echo $this->saldoActual;
    }
    function ingresar($cant){
       $this -> $saldoActual = $this->$saldoActual + $cant;
    }
    function retirar($cant){
        if ($saldoActual > 0) {
            if ($cant < $this->$saldoActual) {
                $this->$saldoActual = $this->$saldoActual - $cant;
            }
        }
    }
    function datos(){
        echo'<h5 class="mb-1">'.$this->nombreCuenta.'</h5>
            <small>'.$this->docId.'</small>
            </div>
            <p class="mb-1">Saldo: '.$this->saldoActual.'</p>
            <small>Interes '.$this->interes.'%</small>';
    }
}

?>
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
<?php $datos = new cuentaBancaria("Jhorman", "1000661096", 100000, 10 ); ?>
<div class="datos list-group">
  <a class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between"><?php $datos->datos();?></div>
  </a>
</div>
<div class="togger"><i class="fas fa-bars"></i></div>
<p><?php $datos->actualizarSaldo();?></p>

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
