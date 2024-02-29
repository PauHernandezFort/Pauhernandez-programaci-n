<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>

         <?php
           require_once "autoloader.php";
           
            $prueba = new Cartera();
            $mostrar= $prueba->darwList();
           ?>



</body>

</html>

