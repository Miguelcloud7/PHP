$(document).ready(function(){
    $("#formIva").submit(function(){
        var siniva = {"total": $("#total").val()}

        if (siniva.total != "" ) {
            $.ajax({
                data: siniva,
                url: 'iva.php',
                type: 'POST',
                success: function(data) {
                    $('#resultado').val(data);
                    
                }
        
            });}else {
            alert("Por favor rellene correctamente el formulario")
        }
        return false;
    })});