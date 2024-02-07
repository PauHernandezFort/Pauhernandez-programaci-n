<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="indexx.css">
<body>

    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th> 
                <th>Date</th>
                <th>Active</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
         <?php
           require_once "autoloader.php";
           
            $prueba = new Cartera("data.csv");
            $mostrar= $prueba->darwList();
            echo $mostrar;
            $prov=$prueba->getVisit(1);
           echo $prov ->getId();

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

