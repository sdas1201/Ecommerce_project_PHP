<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<?php
include 'header.php';
?>
<body>
    <div class="container-fluid ">
        <div class="col-md-12">
            <div class="row">
            <h1 class="text-primary text-center my-3 ">WELCOME TO MYSTORE</h1>
<?php
include 'config.php';
$Record = mysqli_query($con,"select * from `tblproduct`");
while($row = mysqli_fetch_array($Record)){

        $check_page = $row['PCategory'];
        if($check_page ==='Home'){

    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3'>
    <div class='card m-auto' style='width: 18rem;'>
    <form action='Insertcart.php' method='POST'>
<img src='../admin/product/$row[PImage]' class='card-img-top' alt='...'>
<div class='card-body text-center '>
<h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
<p class='card-text text-danger fs-4 fw-bold'>Rs. $row[PPrice]</p>
<input type='hidden' name='PName' value='$row[PName]'>
<input type='hidden' name='PPrice' value='$row[PPrice]'>
<input type='number' name ='PQuantity' value=' min='1' max='15'' placeholder='Quantity'>
<input type='submit'name ='addCart' class='btn btn-danger text-white w-100 my-4' value='Add to Cart'>
</div>
</div>
</form>
</div>
";
}
}
?>
            </div>
        </div>
    </div>
   
</body>
</html>