<?php
    include("conn.php");
    $uname=$_POST['uname'];
    $pswd=$_POST['pswd'];
    $age=$_POST['age'];
    

    if(isset($_FILES['uploadFile'])){
        
        $tempFileName = $_FILES["uploadFile"]["tmp_name"];
        $fileName = $_FILES["uploadFile"]["name"];
        $path = "C:/xampp/htdocs/phpdemo/mainproject/upload/";
        $dest = $path.$fileName;
        if(move_uploaded_file($tempFileName,$dest)){
            echo "success";
        }
        else{
            echo "error";
        }
    }
    else{
        echo "Please select File";
    }




    // $query = "insert into users values('','$uname','$pswd','$age','$dest')";
    // if(mysqli_query($conn,$query)){
    //     echo "Registered Successfully";
    // }
    // else{
    //     echo "Error:".mysqli_error();
    // }
?>