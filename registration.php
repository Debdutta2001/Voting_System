<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting system- Registration page</title> 
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../partials/actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
<input type="text" class="form-control w-50 m-auto" placeholder=" Enter your user name" required="required" name="username" auto="off">
                </div>
                <div class="mb-3">
<input type="text" class="form-control w-50 m-auto" placeholder=" Enter your mobile number" required="required" name="mobile" maxlength="10" minlength="10" auto="off">
                </div>
                <div class="mb-3">
<input type="password" class="form-control w-50 m-auto" placeholder=" Enter your password" required="required" name="password" auto="off">
                </div>
                <div class="mb-3">
<input type="password" class="form-control w-50 m-auto" placeholder="Confirm password" required="required" name="cpassword" auto="off">
                </div>
                <div class="mb-3">
<input type="file" class="form-control w-50 m-auto"  name="photo">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-3">Register</button>
                <p>Already have an Account? <a href="../" class="text-white">Login Here</a></p>
            </form>
        </div>

    </div>
    
</body>
</html>