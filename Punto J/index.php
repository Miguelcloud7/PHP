<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto J</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
    <h1>Validar</h1>
<form class="container needs-validation" id="validacion">
  <div>
    <label for="Tp" class="form-label">Total a Pagar</label>
    <input name="Tp" type="number" class="form-control" id="Tp" required>
  </div>
  <div><textarea class="text" name="campo" id="texto">Campo de resultado</textarea></div>
  <div>
    <button class="btn btn-primary" id="submit" type="submit">Validar</button>
  </div>
</form>
</body>
<script src="main.js"></script>
</html>