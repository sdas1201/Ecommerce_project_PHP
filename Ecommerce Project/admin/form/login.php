<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-white">
<div class="container">
        <div class="row">
            <div class ="col-md-6 m-auto border border-primary mt-4 shadow-lg ">
            <form action="login1.php" method ="POST" >
                <div>
                    <p class="text-center fw-3 bg-secondary text-white fs-5 my-3 btn form-control">ADMIN LOGIN FORM</p>
                </div>
                <div class mb-3>
                <label for="formGroupExampleInput" class="form-label">Username</label>
                 <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Enter username">
                </div>
                <div class mb-3>
                <label for="formGroupExampleInput" class="form-label">Password</label>
                 <input type="password" name="userpassword" class="form-control" id="formGroupExampleInput" placeholder="Enter password">
                </div>
                
                <button name="login" class=" btn form-control bg-primary text-white fs-6 fw-semibold my-5">Login</button>
             </form>
            </div>
        </div>
</body>
</html>