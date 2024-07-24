<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting system</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <a href="/voting/partials/admin.php"><button class="btn btn-dark text-light px-3">Admin Login</button></a>
    <div class="bg-info">
        <h2 class="text-center">Login </h2>
        <div class="container text-center py-4" >
            <form action="../voting/partials/actions/login.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username" required="required" auto="off">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number" required="required" maxlength="10" minlength="10" auto="off">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" required="required" auto="off">
                </div> 
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
            <button type="submit" class="btn btn-dark my-4">Login</button>
            <p>Don't have an account? <a href="./partials/registration.php" class="text-white">Register Here</a></p>
            
            
            </form>
        </div>
    </div>
    
</body>
</html>