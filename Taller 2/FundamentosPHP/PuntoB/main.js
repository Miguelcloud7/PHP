$(document).ready(function() {
    let contB = 1;
    data = { "contadorB": contB }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
    $("#formIva").submit(function() {
        var siniva = { "total": $("#total").val() }

        if (siniva.total != "") {
            $.ajax({
                data: siniva,
                url: 'iva.php',
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