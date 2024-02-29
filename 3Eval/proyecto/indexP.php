<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="index.css">
<body>
<a href="start.html" onclick="window.history.back();" class="back-button">
        <img src="img/house.png" alt="start.html" width="30" height="30">
    </a>
    <table class="redTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th> 
                <th>Adress</th>
                <th>Delete</th>
                <th>Edit</th> 
                <th>Create</th>
                <th>Visits</th>
                


            </tr>
        </thead>
         <?php
           require_once "autoloader.php";
           
            $prueba = new LogPatient("dataP.csv");
            echo $prueba->drawList();

       
        
           ?>
        <tfoot>
            <tr>
                <td colspan="7">

                </td>
            </tr>
        </tfoot>
        <tbody>
          
        </tbody>
    </table>


</body>

</html>

