<?php

include("conn.php");
$id = $_GET['id'];
$query = "select * from users where id =".$id;


$res = mysqli_query($conn,$query);

while($row=mysqli_fetch_array($res)){
    $uname = $row['uname'];
    $pswd = $row['pswd'];
    $age = $row['age'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        uname: <input type="text" name="uname" value="<?php echo $uname;?>"><br>
        Password: <input type="password" name="pswd" value="<?php echo $pswd;?>"><br>
        Age: <input type="text" name="age" value="<?php echo $age;?>"><br>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <input type="submit" value="update" name="update">
    </form>
</body>
</html>