<?php

include_once 'rooms.php'

class ApiPeliculas{

    function getAll(){
        $rooms = new room();
        $rooms = array();
        $rooms = ["items"] = array();

        $res = $room ->obtenerRoom();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSC)){
                $item = array(
                    'id' => $row['id']
                    'nombre' => $row['nombre']
                    
                );
                array_push($rooms'items'],$item);
            }
            echo json_enchode($rooms)
        }else{
            echo json_encode(array('mensaje' => 'no hay elementos registrados'))
        }
    }

}

?>