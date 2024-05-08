document.addEventListener("DOMContentLoaded", main);
    function main() {

        document.getElementById("paco").addEventListener("click", oscuro);
        
    }
    function oscuro() {
        let container = document.getElementById("paco");
        container.style.backgroundColor="red";
           /* if (color == 'rgb(255, 255, 255)') {
                this.style.backgroundColor = 'rgb(130, 130, 130)';
            } else {
                this.style.backgroundColor = 'rgb(255, 255, 255)';
            }*/
            document.getElementById("paco").style.backgroundColor = 'rgb(130, 10, 30)';
    }