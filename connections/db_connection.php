<?php

function connection() {
    $host = "localhost";
    $username = "root";
    $password = "12345";
    $db_name = "my app";
    $con = new mysqli($host, $username, $password, $db_name);
    if($con->connect_error){
        echo $con->connect_error;
    } else {
        echo "succes";
        return $con;
    }
}
?>