<?php

    $servername = "localhost";
    $username = "hack";
    $password = "";

    $databasename = "hack";
    $conn = new mysqli($servername, $username, $password, $databasename, 3306);

    if($conn->connect_error){

        die("Connection failed". $conn->connect_error);
    }
    else{
        echo "connection successfull";
    }
    

?>