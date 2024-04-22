<!-- php - connect file -->
<?php
    include('includes/connect.php');


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
            <img src="./images/logo.png" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">total Price</a>
                    </li>
                </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 text-white" type="search" placeholder="Search for clothes" aria-label="Search">
                <button class="btn btn-dark" type="submit">Search</button>
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
    <div class="bg-light-subtle my-4">
        <h3 class="text-center">
            Clothing Store
        </h3>
        <p class="text-center">Welcome to the clothing store</p>
    </div>

    <!-- 4th child -->
    <div class="container-fluid px-3">    
        <div class="row">
            <div class="col-md-10 px-3">
                <!-- products -->    
                <div class="row">
                    <div class="col-md-4 mb-4 ">
                        <div class="card" >
                            <img src="./images/printed_white_t-shirt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/printed_beige'_t-shirt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/printed_darkbeige_t-shirt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/blue_jeans.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/darkblue_jeans.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/lightblue_jeans.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/printed_beige_hoodie.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/printed_dark_hoodie.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card" >
                            <img src="./images/printed_darkblue_hoodie.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-dark">Add to Cart</a>
                                <a href="#" class="btn btn-outline-dark">View more</a>
                            </div>
                        </div>
                    </div>
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
                        $select_brands="Select * from `brands`";
                        $result_brands=mysqli_query($con,$select_brands);
                        // $row_data=mysqli_fetch_assoc($result_brands);
                        // echo $row_data['brand_title'];

                        while($row_data=mysqli_fetch_assoc($result_brands)){
                            $brand_title = $row_data['brand_title'];
                            $brand_id = $row_data['brand_id'];
                            echo " <li class='nav-item mb-2'>
                            <a href='index.php?brand=$brand_id' class='nav-link fw-bold'>$brand_title</a>
                        </li>";
                        }
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
                        $select_categories="Select * from `categories`";
                        $result_categories=mysqli_query($con,$select_categories);
                        // $row_data=mysqli_fetch_assoc($result_brands);
                        // echo $row_data['brand_title'];

                        while($row_data=mysqli_fetch_assoc($result_categories)){
                            $category_title = $row_data['category_title'];
                            $category_id = $row_data['category_id'];
                            echo " <li class='nav-item rounded-2 mt-2'>
                            <a href='index.php?category=$category_id' class='nav-link fw-bold'>$category_title</a>
                        </li>";
                        }
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