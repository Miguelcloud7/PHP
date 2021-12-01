<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto E</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
  <h1>Validar Edad</h1>
<form class="container needs-validation" id="validacion" action="valida.php" method="post">
  <div>
    <label for="nombre" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="nombre" required>
  </div>
  <div>
    <label for="direccion" class="form-label">Dirección</label>
    <input name="direccion" type="text" class="form-control" id="direccion" required>
  </div>
  <div>
    <label for="date" class="form-label">Fecha de nacimiento</label>
      <input type="date" class="form-control" id="date" required>
  </div>
  <div>
    <button class="btn btn-primary" id="submit" type="submit">Validar</button>
  </div>
  <div>
  <textarea class="text" name="campo" id="texto">Campo de resultado</textarea>
  </div>
</form>

</body>
<script src="main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>