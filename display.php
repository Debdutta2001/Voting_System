<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body style="background-color:lightblue">
<a href="/voting/index.php"><button class="btn btn-dark text-light px-4">Back</button></a>

    <h1 class="text-center my-4">User & Voter Data</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered" border="5">
  <thead class="table-dark">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Username</th>
      <th scope="col">mobile</th>
      <th scope="col">standard</th>
      
      
    </tr>
  </thead >
  <tbody>
    <?php
$sql="select * from `userdata`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
$username=$row['username'];
$mobile=$row['mobile'];
$status=$row['status'];
$std=$row['standard'];
echo '  <tr>
<td>'.$id.'</td>
<td>'.$username.'</td>
<td>'.$mobile.'</td>
<td>'.$std.'</td>

</tr>
';


}

    ?>
  
   
   
  </tbody>
</table>
    </div>
</body>
</html>