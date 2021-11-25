<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <script src="main.js"></script>
    <title>Document</title>
</head>
<body>
    <form class="suma" method="post" action="funcion.php" id="formSuma" >
        <div class="color" >
            <div class="num">
                <p class="titulo" >Suma Tres Numeros
                    <input class="input" type="text" name="num1" id="num1" placeholder="Inserte el numero" required><br>
                    <input class="input" type="text" name="num2" id="num2" placeholder="Inserte el numero" required><br>
                    <input class="input" type="text" name="num3" id="num3" placeholder="Inserte el numero" required><br>
                </p>
                <hr>
                <div>
                    <button type="submit" class="boton">Calcular</button>
                </div>
                <input type="text" id="resultado">
            </div>
            <div class="icon" >
                <img class="imgSuma" src="img/suma.png" alt="">
            </div>
        </div>
        
    </form>
    
</body>
</html>