<?php
class Modelo extends Conexion{

public function __construct()
    {
        $this->fichero = 'tareas,csv';
        parent::__construct();
    }
    public function init(){
        $this->delete();
        $this->importar();
    }

public function importar(){
    $conn = $this->getConn();
    $gestor = fopen('tareas.csv', "r");
    while (($element = fgetcsv($gestor)) !== false) {
        if (count($element) >=5 ) {
            var_dump($element);
            $query = "INSERT INTO `tareas`( `titulo`, `descripcion`, `fecha_creacion`, `fecha_vencimiento`) VALUES ('$element[1]','$element[2]','$element[3]','$element[4]')";
            $result = mysqli_query($conn, $query);
    }
    }
    fclose($gestor);

}
public function delete(){
    $conn = $this->getConn();
    $query = "DELETE FROM `tareas`";
    $result = mysqli_query($conn, $query);
}

public function getAllTasks(){
    $array = [];
    $conn = $this->getConn();
    $query = "SELECT * FROM `tareas`";
    $result = mysqli_query($conn, $query);
    $maximRows = $result->num_rows;

    for ($i=0; $i < $maximRows;$i++){
        $result->data_seek($i);
        array_push($array, $result->fetch_array(MYSQLI_ASSOC));
    }
return $array;
}
public function showAllTask(){
    $array = $this->getAllTasks();
    $lista= "";
    foreach ($array as $info){
        $id = $info['id'];
        $titulo = $info['titulo'];
        $vencimiento= $info['fecha_vencimiento'];

        $lista.=" <tr>";
        $lista.=" <td> $id </td>";
        $lista.= "<td> $titulo </td>";
        $lista .="<td> $vencimiento </td> ";
        $lista .= "</tr>";

    }
    return $lista;
}
}
?>