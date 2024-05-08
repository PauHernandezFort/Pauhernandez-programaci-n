document.addEventListener("DOMContentLoaded", main);

function main() {
    contar();
    enlace();
}

function contar() {
    let parrafos = document.getElementsByTagName("p");
    for (let index = 0; index < parrafos.length; index++) {
        const parrafo = parrafos[index];
        let palabras = parrafo.innerHTML.split(" ");
        let num = palabras.length;
        palabras.push("<br><strong>" + num + "</strong></br>");
        let texto = palabras.join(" ");
        parrafo.innerHTML = texto;
    }
}
function enlace(){  
    for (let index = 0; index < parrafos.length; index++) {
        const parrafo = parrafos[index];
        let palabras = parrafo.innerHTML.split(" ");
        for (let index = 0; index < palabras.length; index++) {
            let palabra = palabras[index];
            if(palabra === "nulla"){
                palabra = "<a herf = 'http://google.com'>nulla</a>"
            }
        }
        palabras.push("<br><strong>" + num + "</strong></br>");
        let texto = palabras.join(" ");
        parrafo.innerHTML = texto;
        }

}