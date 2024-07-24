<?php
session_start();
include('connect.php');
include('function.php');


$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$image=$_FILE['photo'] ['name'];

$std=$_POST['std'];

$sql="Select * from `userdata`where username='$username' and mobile='$mobile' and password='$password' and standard='$std'";

$result=mysqli_query($con,$sql);


if(mysqli_num_rows($result)>0){
    $sql="Select username,photo,votes,id from `userdata`  where standard='group'";
    $resultgroup=mysqli_query($con,$sql);
if(mysqli_num_rows($resultgroup)>0) {
    $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
}
$data=mysqli_fetch_array($result);

$_SESSION['username']=$data['username'];
$_SESSION['mobile']=$data['mobile'];
$_SESSION['password']=$data['password'];
$_SESSION['std']=$data['std'];
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION['photo']=$data['photo'];
$_SESSION['data']=$data['data'];


echo  '<script> 
window.location="/voting/partials/dashboard.php";
</script>';

}
else {
    echo '<script>
    alert("Invalid credentials");
    window.location="/voting/index.php";
    </script>';
    
}

?>
