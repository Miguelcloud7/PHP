$(document).ready(function() {
    let contA = 1;
    let data = { "contadorA": contA }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
    $("#formSuma").submit(function() {
        var numeros = { "num1": $("#num1").val(), "num2": $("#num2").val(), "num3": $("#num3").val() }

        if (numeros.num1 != "" && numeros.num2 != "" && numeros.num3 != "") {
            $.ajax({
                data: numeros,
                url: 'funcion.php',
                type: 'POST',
                success: function(data) {
                    $('#resultado').val(data);

                }

            });
        } else {
            alert("Por favor rellene correctamente el formulario")
        }
        return false;
    })
});