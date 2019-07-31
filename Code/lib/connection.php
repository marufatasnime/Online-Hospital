<?php

$host="localhost";
$user="root";
$pass="";
$db="hospital2";

$connection =new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        die($connection->error);
    }
    else{
        // echo "database connected";
    }
    

?>