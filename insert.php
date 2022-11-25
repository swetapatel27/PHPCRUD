<?php
    include("conn.php");
    $uname=$_POST['uname'];
    $pswd=$_POST['pswd'];
    $age=$_POST['age'];

    $query = "insert into users values('','$uname','$pswd','$age')";
    if(mysqli_query($conn,$query)){
        echo "Registered Successfully";
    }
    else{
        echo "Error:".mysqli_error();
    }
?>