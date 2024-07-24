

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark">
<form action="/voting/partials/actions/assign.php" method="POST" enctype="multipart/form-data">
    <h1 class="text-info text-center p-3">Admin Login</h1>
    <div class="container text-center py-4" >
  <input type="text" class="form-control w-50 m-auto" name="username" placeholder="enter admin name" required="required"   />
  <br>
  <input type="password" class="form-control w-50 m-auto" name="password" placeholder="enter password" required="required"  />

       <br>         
<button class="btn btn-light" type="submit" name="submit">Submit</button>
</div>
</form>
</body>
</html>