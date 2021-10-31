$(document).ready(function() {
    document.getElementById("jq").innerHTML = "Version de jQuery 3.5.1";
});
$("#resultado").hide();

function login() {

    var nombre = document.getElementById("nombre").value;
    var tipoid = document.getElementById("tipoid").value;
    var doc = document.getElementById("documento").value;
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    var direccion = document.getElementById("direccion").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;


    $("#resultado").show("3000");
    event.preventDefault();
    if (nombre != false && tipoid != false && doc != false && email != false && tel != false && direccion != false && pass != false && cpass != false) {
        if (pass == cpass) {
            document.getElementById("resultado").innerHTML = "Nombre: " + nombre + '\n' + 'Tipo de identificación: ' + tipoid + '\n' + 'Documento: ' + doc + "\n" + "Email: " + email + '\n' + 'Telefono: ' + tel + '\n' + 'Dirección: ' + direccion + '\n' +
                'Contraseña: ' + pass + '\n' + "Confirmacion de contraseña: " + cpass
        } else {
            document.getElementById("resultado").innerHTML = "Las contraseñas no coinciden"
            document.getElementById("resultado").style.color = "red"
        }

    } else {
        var
            datos = [nombre, tipoid, doc, email, tel, direccion, pass, cpass],
            values = ['Nombre', 'Tipo de documento', 'Documento', 'E-mail', 'Telefono', 'Dirección', 'Contraseña', "Confirmación"],
            res = [],
            val, dat, valor = ''
            /**I = contador,    */
        for (var i = 0; i <= dat, dat = datos[i], val = values[i]; i++) {
            res[i] = '';
            if (dat == false) {
                res[i] = "Sin llenar el " + val
                if (res[i] != undefined) {
                    valor += res[i] + '\n'
                }
            }
        }
        document.getElementById("resultado").innerHTML = valor
        document.getElementById("resultado").style.color = "red"
    }
}