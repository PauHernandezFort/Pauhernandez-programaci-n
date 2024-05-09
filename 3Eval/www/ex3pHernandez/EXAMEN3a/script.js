
document.addEventListener("DOMContentLoaded", principal);

function principal() {
    
    document.addEventListener("click", colores);
    document.addEventListener("click", tamaño);

}
    function colores(){
        let parrafo =document.getElementById("abstract");
        parrafo.style.backgroundColor = 'yellow';

        }
     
        function tamaño(){
            let parrafo =document.getElementById("abstract");
            parrafo.style.fontSizecd = '100px';
            }
         
    
    
    