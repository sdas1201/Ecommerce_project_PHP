<?php
//this code is for uploading image of product from product page
if(isset($_POST['submit'])){
    include 'config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $image_des = "Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name); // image goes from temporary file to xamp folder(local server)

    $product_category = $_POST['Pages'];

    //insert query
    mysqli_query($con," INSERT INTO `tblproduct`( `PName`, `PPrice`, `PImage`, `PCategory`) 
    VALUES ('$product_name','$product_price','$image_des','$product_category')");

    header("location:index.php");
}



?>

