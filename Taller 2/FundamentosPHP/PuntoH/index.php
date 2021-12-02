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
    
    <title>Ejercicio 4 notas</title>
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
<form id="notas" class="con-m">

        <input type="text" name="n1" id="nota1" placeholder="Ingrese la nota 1: " class="form-control form-control-sm">
        <br>
       
        <input type="text" name="n2" id="nota2" placeholder="Ingrese la nota 2: " class="form-control form-control-sm">
        <br>
       
        <input type="text" name="n3" id="nota3" placeholder="Ingrese la nota 3: " class="form-control form-control-sm">
        <br>
       
        <input type="text" name="n4" id="nota4" placeholder="Ingrese la nota 4: " class="form-control form-control-sm">
        <br>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
        <br>
        <textarea name="cont" id="cont" style="width: 300px; height: 150px;"></textarea>
      
</form>
</div>
<script src="main.js"></script>
</body>
</html>