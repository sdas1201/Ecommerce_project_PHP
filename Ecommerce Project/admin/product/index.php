<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-light ">
    <div class="container ">
        <div class="row">
            <div class ="col-md-6 m-auto border border-primary mt-4">
            <form action="insert.php" method ="POST" enctype="multipart/form-data">
                <div>
                    <p class="text-center fw-3 bg-dark text-white fs-4">PRODUCT DETAILS</p>
                </div>
                <div class mb-3>
                <label for="formGroupExampleInput" class="form-label">Product Name</label>
                 <input type="text" name="Pname" class="form-control" id="formGroupExampleInput" placeholder="Enter product name">
                </div>
                <div class mb-3>
                <label for="formGroupExampleInput" class="form-label">Product Price</label>
                 <input type="text" name="Pprice" class="form-control" id="formGroupExampleInput" placeholder="Enter product price">
                </div>
                <div class mb-3>
                <label for="formGroupExampleInput" class="form-label">Product Image</label>
                 <input type="file" name="Pimage" class="form-control" id="formGroupExampleInput" >
                </div>
                <div class mb-3>
                <label for="formGroupExampleInput" class="form-label">Select Page Category</label>
                <select class="form-select" name ="Pages" "aria-label="Default select example">
                <option value="Home">Home</option>
                <option value="Saree">Saree</option>
                <option value="Shirt">Shirt</option>
                <option value="Mobile">Mobile</option>
                </select>
                </div>
                <button name="submit" class=" form-control bg-danger text-white fs-6 fw-semibold my-2">Upload Product</button>
             </form>
            </div>
        </div>
    </div>
    
    
    <!-- fetch data -->

<table class="table  mx-1  table-hover border border-warning px-3">
  <thead class="bg-dark text-white ">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    
  </thead>
  <tbody>
    <?php
       include "config.php";
       $Record = mysqli_query($con,"SELECT * FROM `tblproduct`");

       while ($Row = mysqli_fetch_array($Record))

       echo"
       <tr>
       <td>$Row[Id]</td>
       <td>$Row[PName]</td>
       <td>$Row[PPrice]</td>
       <td><img src='$Row[PImage]' height='120px' width='100px'></td>
       <td>$Row[PCategory]</td>
       <td><a href='' class='btn btn-danger'>Delete</a></td>
       </tr>
       "

    ?>
  </tbody>
</table>
</body>
</html>