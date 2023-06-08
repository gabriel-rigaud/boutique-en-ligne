var i = 0;
var texte = "Beni, Bienvi, Bienvenue";
var speed = 250;
var direction = 1;
function typeWriter() {
    if (i < texte.length && direction == 1) {
        document.getElementById("texte").innerHTML += texte.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
    else if (i > 0 && direction == -1) {
        document.getElementById("texte").innerHTML = texte.substring(0, i-1);
        i--;
        setTimeout(typeWriter, speed/2);
    }
    else {
        direction = 1;
        setTimeout(typeWriter, speed);
    }
    if (i == texte.length) {
        direction = -1;
    }
}
typeWriter();