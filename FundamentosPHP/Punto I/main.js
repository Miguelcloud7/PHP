$(document).ready(function() {
    $("#contador").submit(function() {
        valor_total = { "cantidad": $("#cc").val(), "valor": $("#vc").val() }
        if (valor_total.cantidad != "" && valor_total.valor != "") {
            $.ajax({
                data: valor_total,
                url: "Php.php",
                type: "POST",
                success: function(data) {
                    $("#text").html(data);
                }
            })
        } else(
            $("#text").html("Por favor rellene los campos correcta mente 😀")
        )
        return false
    })
});