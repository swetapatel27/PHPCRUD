<?php
session_start();
if(isset($_SESSION['uname'])){

include("conn.php");

$query = "select * from users";
$res = mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0){

        while($row=mysqli_fetch_array($res)){
            echo $row['id']." ".$row['uname']." ".$row['age'];
            echo "<br>";
        }
}
else{
    echo "Error:".mysqli_error();
}
}
else{
    header("Location:login.php");
    exit();
}

?>