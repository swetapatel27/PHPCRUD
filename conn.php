<?php

    $uname="root";
    $password="";
    $host="localhost";
    $dbname="test";

    $conn = mysqli_connect($host,$uname,$password,$dbname);
    if(!$conn){
        die("Error: ".mysqli_error());
    }
    
?>