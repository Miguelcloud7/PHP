$(document).ready(function() {
    $("#validacion").submit(function() {
        var datos = { "cantidad": $("#Tp").val() }
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