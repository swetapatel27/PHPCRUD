<?php

if (isset($_POST['uname']) && isset($_POST['password'])) 
{
    $uname = $_POST["uname"];
    $pswd = $_POST["password"];

    if($uname == "admin" && $pswd =="admin"){
        header("Location: home.php");
    }
    else{
        header("Location: login.php?error=Incorrent username or password");
    }
    
}
else{

    echo "Enter username or password";
}
?>