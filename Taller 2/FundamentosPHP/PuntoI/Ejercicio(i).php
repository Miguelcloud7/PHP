<?php
session_start();
if(!isset($_SESSION['Valida'])){
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Ejercicio 4 camisas</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Hola <?php echo ucfirst($_SESSION['Valida']['nombre'])?></a>
        <a class="nav-link" href="../cerrarSesion.php">Cerrar Sesion</a>
        
      </div>
    </div>
  </div>
</nav>
    <div class="container">
<form id="contador" class="con-m">
        <input style="width: 250px;" type="text" name="c1" id="cc" placeholder="Ingrese la cantidad de camisas"  class="form-control form-control-sm" required>
        <br>
        <input style="width: 250px;" type="text" name="c1" id="vc" placeholder="Ingrese el valor de las camisas"  class="form-control form-control-sm" required>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <br>
        <textarea name="text" id="text" style="width: 350px;"></textarea>
</form>
    </div>

<script src="main.js"></script>
</body>
</html>