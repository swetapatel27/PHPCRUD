<?php
session_start();
if(isset($_SESSION['uname'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['uname']; ?>, 
thi is home page</h1>
<a href="logout.php">Log Out</a>
</body>
</html>

<?php
}
else{
    header("Location:login.php");
    exit();
}
?>