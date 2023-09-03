<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<?php
 session_start();
 if(!$_SESSION['admin']){

    header("location:form/login.php");

 }

?>

<body>
<nav class="navbar bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>MYSTORE</h1></a>
    <span>
        <i class="ri-admin-fill"></i>
        Hello, <?php echo $_SESSION['admin']; ?>
        <i class="ri-logout-box-r-line"></i>
        <a href="form/logout.php" class ="text-decoration-none text-white">Logout |</a>
        <a href="#" class ="text-decoration-none text-white">User Pannel</a>
    </span>
  </div>
</nav>
    <div>
        <h2 class="text-center">Dashboard</h2>
    </div>
    <div class=" col-md-6 text-center bg-dark m-auto">
        <a href="product/index.php" class="text-decoration-none text-white fs-5 fw-bold px-5">ADD POST</a>
        <a href="" class="text-decoration-none text-white fs-5 fw-bold px-5">USERS</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>