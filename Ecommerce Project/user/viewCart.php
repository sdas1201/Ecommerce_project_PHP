<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<?php
include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-3">
                <h1 class="text-white bg-primary">CART ITEMS</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table table-bordered text-center">
                    <thead class="fs-6  ">
                    <th class="bg-danger text-white">Index.no</th>
                    <th class="bg-danger text-white">Product Name</th>
                    <th class="bg-danger text-white">Product Price</th>
                    <th class="bg-danger text-white">Product Quantity</th>
                    <th class="bg-danger text-white">Total Price</th>
                    <th class="bg-danger text-white">Update</th>
                    <th class="bg-danger text-white">Delete</th>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                echo "
                                <tr>
                                  <td>$key</td>
                                  <td>$value[productName]</td>
                                  <td>$value[productPrice]</td>
                                  <td>$value[productQuantity]</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                
                                </tr>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>