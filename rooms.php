<?php

include_once 'db.php'

class pelicula extends DB{

    function obtenerRooms(){
        $query = $this -> connect()->query('SELECT * FROM ROOMS');
        return $query;
    }
}


?>