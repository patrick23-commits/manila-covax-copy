<?php

function con() {
    $host = "localhost";
    $username = "root";
    $password = "12345";
    $db_name = "my app";

    $con = new mysqli($host, $username, $password, $db_name);
    if(!$con->connect_error){
        return $con;
    }else {
        $con->connect_error;
    }
}
?>