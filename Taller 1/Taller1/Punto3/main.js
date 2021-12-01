$(document).ready(function() {
    document.getElementById("jq").innerHTML = "Version de jQuery 3.5.1";
});

function convertToRoman() {
    let n = document.getElementById("num").value;
    var
        valores = [1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000],
        letras = ['I', 'I,V', 'V', 'I,X', 'X', 'X,L', 'L', 'X,C', 'C', 'C,D', 'D', 'C,M', 'M'],
        res = [],
        num, letra
    for (var i = valores.length - 1; num = valores[i], letra = letras[i]; i--) {
        if (n >= num) {
            var r = Math.floor(n / num);
            n -= r * num;
            if (r <= 4) {
                while (r--) {
                    res.push(letra);
                }
            }
        }
    }
    document.getElementById("romano").innerHTML = res
}