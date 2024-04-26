<!-- php - connect file -->
<?php
    include('./includes/connect.php');
    include('./functions/common_function.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing.com | Cart details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <style>
        .cart_img{
            object-fit: contain !important;
            width: 30%;
            height: 20%;
        }
    

    </style>
</head>
<body>
    <!-- navbar -->
    <!-- 1st child -->
    
    <nav class="navbar navbar-expand-lg bg-success-subtle text-black">
        <div class="container-fluid">
            <img src="./images/logo.png" alt="logo" width="7%" height="7%">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?> </sup></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- calling cart function -->
    <?php
        cart();
    ?>
    <!-- 2nd child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger-subtle">
        <ul class="navbar-nav me-auto text-black fw-bold">
            <li class="nav-item">
                <a class="nav-link"  href="#">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#">Login</a>
            </li>
        </ul>
    </nav>

    <!-- 3rd child -->
    <div class="bg-light-subtle my-4 ms-2">
        <!-- 
        <a href="../index.php">
            <img src="./images/logo.png" width="110" height="75" alt="logo">
            <h2 class="text-left fw-bold text-uppercase text-black d-inline-block align-text-top">Clothing Store</h2>
        </a>-->
    </div>

    <!-- 4th child -->
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <table class="table table-bordered text-center h5">
                    
                    <!-- php code to display dynamic -->
                    <?php 
                        
                        $get_ip_add = getIPAddress(); 
                        $total_price=0;
                        $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                        $result=mysqli_query($con,$cart_query);
                        $result_count=mysqli_num_rows($result);
                        if($result_count> 0){
                            echo "<thead>
                            <tr class='text-uppercase'>
                                <th>Product Title</th>
                                <th>Product Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Remove</th>
                                <th >Operations</th>
                            </tr>
                        </thead>
                        <tbody>";
                            while($row=mysqli_fetch_array($result)){
                                $product_id=$row['product_id'];
                                $select_products="Select * from `products` where product_id='$product_id'";
                                $result_products=mysqli_query($con,$select_products);
                                    while($row_product_price=mysqli_fetch_array($result_products)){
                                        $product_price=array($row_product_price['product_price']);
                                        $price_table=$row_product_price['product_price'];
                                        $product_title=$row_product_price['product_title'];
                                        $product_image1=$row_product_price['product_image1'];
                                        $product_values=array_sum($product_price);
                                        $total_price+=$product_values;
                                    
                    ?>            
                    <tr>
                        <td class="fw-bold fs-5"><?php echo $product_title ?></td>
                        <td><img src="./images/<?php echo $product_image1 ?>" class="cart_img" alt="" ></td>
                        <td><input type="text" name="qty" class="form-input w-50"></td>
                        <?php
                            $get_ip_add = getIPAddress();    
                            if(isset($_POST['update_cart'])){
                                $quantities=$_POST['qty'];
                                $update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
                                $result_products_quantity=mysqli_query($con,$update_cart);
                                $total_price=$total_price*$quantities;
                            }
                        ?>
                        <td class="fw-bold fs-5"><?php echo $price_table ?>kr.</td>
                        <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id; ?>"></td>
                        <td>
                            <!-- <button class="btn btn-success fw-bold text-light text-center pt-3 pb-0 px-4 border-0 mx-3 my-4">Update</p> -->
                            <input type="submit" value="Update Cart" name="update_cart" class="btn btn-success fw-bold text-light text-center py-3 px-4 border-0 mx-3 my-4">
                            <!-- <button class="btn btn-danger fw-bold text-dark pt-3 pb-0 px-4 border-0 mx-3 my-4" >Remove</p> -->
                            <input type="submit" value="Remove Cart" name="remove_cart" class="btn btn-danger fw-bold text-light text-center py-3 px-4 border-0 mx-3 my-4">
                        </td>
                    </tr>
                        <?php

                                    }   
                                }
                            }

                            else{
                                echo "
                                <div class='col-md-12 text-center'>
                                    <h1 class='text-center fw-bold mt-5'> Cart is empty </h1>
                                    <p class='text-center mt-3'> Click the button to shop on our page </p>
                                </div>";
                            }
                        ?>
                    </tbody>
                </table>
                <!-- subtotal -->
                <div class="row justify-content-end my-3">
                    <?php
                        $get_ip_add = getIPAddress(); 
                        $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                        $result=mysqli_query($con,$cart_query);
                        $result_count=mysqli_num_rows($result);
                        if($result_count> 0){
                            echo "<div class='col-md-6 text-end'>
                            <h4 class='px-3'>Subtotal: <strong> $total_price kr.</strong></h4>
                            <input type='submit' value='Continue shopping' name='continue_shopping' class='btn btn-dark fw-bold text-light text-center border-0 px-3 py-2 '>
                            <button class='btn btn-light btn-outline-dark px-3 py-2'><a href='checkout.php' class='text-dark text-decoration-none fw-bold'> Checkout </a></button>
                           
                        </div>";
                        }else{
                            echo "
                            <div class='col-md-12 text-center'>
                                <input type='submit' value='Continue shopping' name='continue_shopping' class='btn btn-dark fw-bold text-light text-center border-0 px-3 py-2 '>
                            </div>";
                        }
                        if(isset($_POST['continue_shopping'])){
                            echo "<script> window.open('index.php','_self')</script>";
                        }
                    ?>
                    
                </div>
            </form>
        </div>
    </div>
    
    <!-- function to remove item -->
    <?php
        function remove_cart_item(){
            global $con;
            if(isset($_POST['remove_cart'])){
                foreach($_POST['removeitem'] as $remove_id){
                    echo $remove_id;
                    $delete_query="Delete from `cart_details` where product_id=$remove_id";
                    $run_delete=mysqli_query($con,$delete_query);
                    if($run_delete){
                        echo"<script>window.open('cart.php','_self') </script>";
                    }
                }
            }
            
        }
        echo $removeitem=remove_cart_item();
       
?>


<!-- footer--> 
    <?php
        include("./includes/footer.php");
    ?>
        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>