document.addEventListener("DOMContentLoaded", principal);

function principal() {
    contar();
    enlace();
    img();
    document.addEventListener("click", colores);
    document.addEventListener("click", aumento);
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

function enlace() {
    let parrafos = document.getElementsByTagName("p");
    for (let index = 0; index < parrafos.length; index++) {
        const parrafo = parrafos[index];
        let palabras = parrafo.innerHTML.split(" ");
        for (let j = 0; j < palabras.length; j++) {
            let palabra = palabras[j];
            if (palabra === 'nulla') {
                palabras[j] = "<a href='http://google.com'>nulla</a>";
            }
        }
        texto = palabras.join(" ");
        parrafo.innerHTML = texto;
    }
    
}
function img(){ 
    let parrafos = document.getElementsByTagName("h1");
    for (let index = 0; index < parrafos.length; index++) {
        const element = parrafos[index];
        let imagen = document.createElement("img");
        imagen.src="https://lledogrupo.com/wp-content/uploads/2019/01/star-256.png";
        imagen.height="16";
        imagen.width="10";
        parrafos[index].appendChild(imagen)
    }
    }
    let numeroClick=0;
    function colores(parrafo){
        elemento= parrafo.target;
        if (elemento.id === "abstract"){
            if (numeroClick ===0){
                colorV = elemento.style.backgroundColor;
            }
             numeroClick ++;
            if (numeroClick % 2 === 0){
                elemento.style.backgroundColor= colorV; 
                
            }
            else {
                elemento.style.backgroundColor="red"; 
            }
                    
        }
     }
     function aumento(parrafo){
        const elemento= parrafo.target;
        if (elemento.id === "content"){
            let tamaño = parseInt(elemento.style.fontSize);
            tamaño += 10;
          elemento.style.fontSize = tamaño + "px";
     }
     }
    
    
    
    
    