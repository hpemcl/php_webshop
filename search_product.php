<!-- php - connect file -->
<?php
    include('./includes/connect.php');
    include('./functions/common_function.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

  
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="index.php">Home</a>
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
                        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><?php cart_item(); ?> </a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link" href="#">Total Price: <?php  total_cart_price() ?> kr.</a>
                    </li>
                </ul>
            <form class="d-flex" action="" method="get">
                <input class="form-control me-2 text-black" type="search" placeholder="Search for clothes" aria-label="Search" name="search_data">
                <!-- <button class="btn btn-dark" type="submit">Search</button> -->
                <input type="submit" value="Search" class="btn btn-dark" name="search_data_product">
            </form>

            </div>
        </div>
    </nav>


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
    <div class="container-fluid px-3">    
        <div class="row ">
            <div class="col-md-10 px-3">
                <!-- products -->    
                <div class="row">

                <!-- fetching products - php -->
                <?php
                //calling function
                    search_product();
                    get_unique_categories();
                    get_unique_brands();
               ?>
                    
                </div>
            </div>
            

            <div class="col-md-2 bg-success-subtle rounded-2 me-0 p-3">
                <!-- sidenav -->
                <!-- brands to be displayed -->
                <ul class="navbar-nav me-auto text-center rounded-1 ">
                    <li class="nav-item  bg-success text-white rounded-1 mb-4">
                        <a href="" class="nav-link fw-bold">
                            <h4 class="fw-bold">
                                Delivery Brands
                            </h4>
                        </a>
                    </li>

                    <!-- php -->
                    <?php
                    //calling function
                        getbrands();
                    ?>
                </ul>

                <!-- categories to be displayed -->
                <ul class="navbar-nav me-auto text-center rounded-1 my-2 py-2">
                    <li class="nav-item  bg-success text-white rounded-1 ">
                            <h4 class="fw-bold my-2 py-1">
                                Categories
                            </h4>
                    </li>

                    <!-- php -->
                    <?php
                    //calling function
                        getcategories();
                    ?>

                </ul>
            </div>
        

        </div>
    </div>

    <!-- footer--> 
    <div class="bg-danger-subtle text-dark p-3 py-4 text-center">
        <p> All rights reserved &copy; Designed by Hannah - 2024</p>
    </div>
        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>