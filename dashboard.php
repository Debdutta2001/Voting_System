<?php
SESSION_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}

$data['username']=$_SESSION['username'];
$data['mobile']=$_SESSION['mobile'];
$data['password']=$_SESSION['password'];
$data['std']=$_SESSION['std'];
$data['id']=$_SESSION['id'];
$data['status']=$_SESSION['status'];
$data['photo']=$_SESSION['photo'];
$data['data']= $_SESSION['data'];

if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}else{
    $status='<b class="text-danger"> Not Voted</b>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System - Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!--css link-->
<link rel="stylesheet" href="/voting/partials/style.css">
</head>
<body style="background-color:lightblue;">
<div class="container my-5">
<a href="../index.php"><button class="btn btn-dark text-light px-3">Back</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
        <h1 class="my-3">Voting System</h1> 
        <div class="row my-5"> 
        <div class="col-md-7">     
<?php
                if(isset($_SESSION['groups'])){
                    $groups=$_SESSION['groups'];
                    for($i=0;$i<count($groups); $i++){
                        ?>
                        
                        <div class="row">
                        <div class="col-md-4">
                            <img src="/voting/partials/uploads/<?php echo $groups[$i]['photo']  ?>" alt="group image">
                        </div>
                        <div class="col-md-8">
                            <strong class="text-dark h5">Group Name:</strong> 
                            <?php echo $groups[$i]['username']  ?>
                            <br>
                            <strong class="text-dark h5">Votes:</strong>
                            <?php echo $groups[$i]['votes']  ?>
                            <br>
                        </div>
                    </div>
                    
                    
                    <form action="../partials/actions/vote.php" method="post">
                        <input type="text" name="groupvotes" value="<?php echo $groups[$i]['votes']  ?>">
                        <input type="text" name="groupid" value="<?php echo $groups[$i]['id']  ?>">

<?php
if($_SESSION['status']==1){
    ?>
    <button class="bg-success my-3 text-white px-3">Voted</button>
    <?php
}else{
    ?>
    <button class="bg-danger my-3 text-white px-3" type="submit">Vote</button>
    <?php
}

?>

                    </form>
                    <hr>
                    <?php
                    }

                }else{
                    ?>
                    <div class="container">
                        <p> No groups to display </p>
                    </div>
                    <?php
                }
                ?>

                <!-- Group Profile-->
              
            </div>
           
            <div class="col-md-5">
                <!-- User profile -->
                <img src="/voting/partials/uploads/<?php echo $data['photo'];?>"  >
                <br><br>
                <strong class="text-dark h5">Name:</strong>
                <?php echo $data['username']; ?><br><br>
                <strong class="text-dark h5">Mobile:</strong>
                <?php echo $data['mobile']; ?><br><br>
                <strong class="text-dark h5">Status:</strong>
                <?php echo $status; ?><br><br>
            </div>
        </div>
    </div>
</body>
</html>
            
            