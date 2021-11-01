function numero() {
    let n = document.getElementById("num").value;
    let c = document.getElementById("cant").value;
    var multi = 1
    if (n > 1) {
        for (var i = 1; i <= n; i++) {
            multi = multi * i
            var resultado = + /*math*/ (multi)
        }
        var letra = resultado + ""
        var res = 0,
            cant = 0
        for (let e = letra.length; res == "0" || res == "00" || res == "000" || res == "0000"; e--) {
            cont = -1
            res = letra.substr(e - 1, 1)
            cant = letra.substr(e - 1)
            if (res != "0") {
                document.getElementById("resul").value = "El resultado es: " + letra.substr(0, e) + "\nY desde la posición " + c + " Es: " + letra.substr(c - 1, e - c + 1)
            }
        }

        //var gomita = toArray(resultado)
    } else {
        document.getElementById("resul").value = n
    }
    event.preventDefault();
}

$(document).ready(function() {
    document.getElementById("jq").innerHTML = "Version de jQuery 3.5.1";
});










/*def factorial(n):
    if n==0 or n==1:
        resultado=1
    elif n>1:
            resultado=n*factorial(n-1)
    return resultado

fact3=factorial(3)
print(fact3)*/