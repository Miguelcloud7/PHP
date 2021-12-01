$(document).ready(function() {
    let contE = 1;
    let data = { "contadorE": contE }
    $.ajax({
        data: data,
        url: "../contadores.php",
        type: "POST"
    })
    $("#validacion").submit(function() {
        var datos = { "nombre": $("#nombre").val(), "direccion": $("#direccion").val(), "fec_nac": $("#date").val() }
        if (datos.nombre != "" && datos.direccion != "" && datos.fec_nac != "") {
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