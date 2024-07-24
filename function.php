<?php
include('connect.php');


$sql="Select * from `userdata`  ";
$result=mysqli_query($con,$sql);


if($result) {
    while($row=mysqli_fetch_assoc($result)) {
$username=$row['username'];
$mobile=$row['mobile'];
$password=$row['password'];
$image=$row['photo'];
 echo $row['username']  . "<br>";


    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>