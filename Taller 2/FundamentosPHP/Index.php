<?php
session_start();
if(isset($_SESSION['Valida'])){
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>

    <div class="container">
        <form id="form" action="dashboard.php" method="POST">
            <h1>Formulario</h1>
            <div class="form-group">
                <label for="exampleInputPassword1">Ingresar Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ingresar Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ingresar E-mail</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="Js.js"></script>
</body>

</html>