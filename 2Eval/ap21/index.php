<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="index.css">
<body>

    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
            </tr>
        </thead>
         <?php
           require_once "autoloader.php";
           
            $prueba = new Cartera("data.csv");
            $mostrar= $prueba->darwList();
            echo $mostrar;
           ?>
        <tfoot>
            <tr>
                <td colspan="5">

                </td>
            </tr>
        </tfoot>
        <tbody>
          
        </tbody>
    </table>


</body>

</html>

