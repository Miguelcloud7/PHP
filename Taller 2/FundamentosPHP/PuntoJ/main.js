$(document).ready(function() {
    var contJ = 1;
    let data = { "contadorJ": contJ }
    $.ajax({
        data: data,
        url: '../contadores.php',
        type: 'POST'
    })
    $("#validacion").submit(function() {
        var datos = { "cantidad": $("#Tp").val(), "contadorJ": contJ }
        if (datos) {
            $.ajax({
                data: datos,
                url: 'valida.php',
                type: 'POST',
                success: function(data) {
                    $("#texto").html(data);
                }
            });
        } else {
            alert("Por favor rellene correctamente el formulario")
        }
        return false;
    })
});