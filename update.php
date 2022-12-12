<?php

    include("conn.php");

    if(isset($_POST['update'])){

        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];
        $age = $_POST['age'];
        $id = $_POST['id'];

        $query = "update users set uname='$uname',pswd = '$pswd', age='$age' where id = '$id'";
        
        if(mysqli_query($conn,$query)){
            header("Location:display.php");
        }
        else{
            echo mysqli_error();
        }

    }

?>