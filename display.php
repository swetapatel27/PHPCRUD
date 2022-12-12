

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="display.php" method="post">
    Sort By: 
    <select name="cat">
        <option value="age">Age</option>
        <option value="name">name</option>
    </select>
    <input type="submit" name="sort" value="Sort">
</form>

<?php
session_start();
if(isset($_SESSION['uname'])){

include("conn.php");
$query = "select * from users";

if(isset($_POST['sort'])){

    if ($_POST['cat']=="age"){
    $query="select * from users order by age";
    }
    elseif($_POST['cat']=="name"){
        $query="select * from users order by uname";
    }
    else{
        $query = "select * from users";
    }
}

$res = mysqli_query($conn,$query);

if(mysqli_num_rows($res)>0){
    echo "<table border=1 style='width:100%;'><thead><tr><th>Id</th><th>Name</th><th>Age</th><th>Actions</th></tr></thead>";
        while($row=mysqli_fetch_array($res)){
            $id = $row['id'];
            echo "<tr><td>".$row['id']."</td><td>".$row['uname']."</td><td>".$row['age'];
            echo "</td>";
            echo "<td> <a href='edit.php?id=".$id."'>Edit</a> | <a href='delete.php?id=".$id."'>Delete</a></td></tr>";
            
            
        }
    echo "</table>";
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
</body>
</html>