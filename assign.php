<?php
session_start();
include('operation.php');

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from `admin` where admin_name='$username' and password='$password' ";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0){
    $query="Select admin_name,password from `admin` ";

$data=mysqli_fetch_array($result);

$_SESSION['username']=$data['admin_name'];
$_SESSION['password']=$data['password'];

echo  '<script> 
window.location="/voting/partials/actions/display.php";
</script>';
}
else{
    echo  '<script> 
window.location="/voting/index.php";
</script>';
}
?>