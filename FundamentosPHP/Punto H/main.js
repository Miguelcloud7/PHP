$(document).ready(function() {
    $("#notas").submit(function() {
        var nota = { "nota1": $("#n1").val(), "nota2": $("#n2").val(), "nota3": $("#n3").val(), "nota4": $("#n4").val() }
        if (nota.nota1 != "" && nota.nota2 != "" && nota.nota3 != "" && nota.nota4 != "") {
            $.ajax({
                data: datos,
                url: 'proceso.php',
                type: 'POST',
                success: function(data) {
                    alert(data);
                }
            });}else {
                alert("Porfavor complete el formulario");
            }
        return false;
    });    
});
