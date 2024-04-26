<!-- php - connect file -->
<?php
    include('./includes/connect.php');
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing.com | Checkout</title>
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
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
            <div class="col-md-12 px-3">
                <!-- products -->    
                <div class="row">
                    <?php
                        if(!isset($_SESSION['username'])){
                            include('users_area/user_login.php');
                        }else{
                            include('payment.php');
                        }
                    ?>
                                     
                </div>
            </div>
            
        

        </div>
    </div>

<!-- footer--> 
    <?php
        include("./includes/footer.php");
    ?>
        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>