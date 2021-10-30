$(document).ready(function() {
    document.getElementById("jq").innerHTML = "Version de jQuery 3.5.1";
});
$("#resultado").hide();

function login() {

    $("#resultado").show("3000");
    event.preventDefault();

    var nombre = document.getElementById("nombre").value;
    var tipoid = document.getElementById("tipoid").value;
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    var direccion = document.getElementById("direccion").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var doc = document.getElementById("documento").value;

    alert(doc)
}