<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="index.css">
<body>
<a href='start.html' onclick='window.history.back();' class='back-button'>
        <img src='img/house.png' alt='' width='30' height='30'>
        </a>
    <table class="redTable">
        <thead>
            <tr>
                <th>Patient</th>
                <th>Date</th> 
                <th>Amount</th>
                <th>Defaulter</th>
                <th>Delete</th>
                <th>Edit</th>
                <th>Create</th>


            </tr>
        </thead>
         <?php
           require_once "autoloader.php";
           
            $prueba = new Log("dataPatient.csv");
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

