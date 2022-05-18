<?php

    $con = new mysqli("localhost", "root","","gwplus");

    if($con->connect_error){
        echo "erro ao conectar";
    }

?>
