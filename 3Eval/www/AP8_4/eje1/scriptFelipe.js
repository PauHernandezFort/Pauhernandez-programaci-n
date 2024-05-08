document.addEventListener("DOMContentLoaded", main);
function main() {
    let boton = document.getElementById('oculta');
    boton.addEventListener("click", function (e) {
        ocultar(e.currentTarget);
        e.stopPropagation();
    });

}
function ocultar(ele) {
    let hermano = ele.nextSibling;
    while (hermano.nodeName != "FORM") {
        hermano = hermano.nextSibling;
    };
    hermano.style.display = (ele.innerHTML == "Mostrar formulario") ? "block" : "none";
    ele.innerHTML = (ele.innerHTML == "Mostrar formulario") ? "Ocultar formulario" : "Mostrar formulario";
}