<?php
session_start();
session_destroy();
        $product_name = $_POST['PName'];
        $product_price = $_POST['PPrice'];
        $product_quantity = $_POST['PQuantity'];

    if(isset($_POST['addCart'])){

        $check_product = array_column($_SESSION['cart'],'productName');
        if(in_array($product_name, $check_product)){
            echo"
            <script>
            alert('product already added');
            window.location.href='index.php';
            </script>
            ";
        }
        else{
        $_SESSION['cart'][] = array('productName'=> $product_name, 
                                  'productPrice'=>$product_price, 
                                  'productQuantity'=> $product_quantity
                                 );
                                 header("location:viewCart.php"); 
            }
    }

?>