<?php
session_start();
if (!isset($_SESSION['Valida'])) {
  $Name = $_POST['nombre'];
  $Last_name = $_POST['apellido'];
  $email = $_POST['email'];
  if(!empty($_POST)){
    if (empty($Name)){
      echo "Esciba el nombre <br>";
    }
    if (empty($Last_name)){
      echo "Esciba el apellido <br>";
    }
    if (empty($email)){
      echo "Esciba el correo <br>";
    }
    if (strlen($Name)>15){
      echo "Esciba el nombre no debe superar los 15 caracteres <br>";
    }
  
  }
    $_SESSION['Valida'] = ["nombre" => $Name, "apellido" => $Last_name, "email" => $email];
  

    


}elseif(isset($_SESSION['Valida'])){
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Hola <?php echo ucfirst($_SESSION['Valida']['nombre'])?></a>
        <a class="nav-link" href="cerrarSesion.php">Cerrar Sesion</a>
        
      </div>
    </div>
  </div>
</nav>
    
<div class="container">
    <a href="Puntoc/index.php" class="btn btn-success">Punto C</a>
    </div>
</body>
</html>
<?php } ?>
