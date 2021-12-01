$(document).ready(function() {
    $("#notas").submit(function() {
        var nota = { "nota1": $("#nota1").val(), "nota2": $("#nota2").val(), "nota3": $("#nota3").val(), "nota4": $("#nota4").val() }
        if (nota.nota1 != "" && nota.nota2 != "" && nota.nota3 != "" && nota.nota4 != "") {
            $.ajax({
                data: nota,
                url: 'proceso.php',
                type: 'POST',
                success: function(data) {
                    $("#cont").html(data);
                }
            });
        } else {
            alert("Porfavor complete el formulario");
        }
        return false;
    });
});