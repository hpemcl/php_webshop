<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">

    <style>
        .admin_image{
            width: 40%;
            object-fit: contain;
        }
    </style>    

</head>
<body>

    <!--navbar-->  
    <nav class="navbar navbar-expand-lg bg-success-subtle text-black">
        <div class="container-fluid">
            <img src="../images/logo.png" alt="logo" class="logo">
            <!-- first child-->
            <nav class="navbar navbar-expand-lg bg-success-subtle text-black">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Welcome Guest </a>
                    </li>
                </ul>            
            </div>
        </div>
    </nav>

    <!-- 2nd child -->
    <div class="bg-white">
        <h3 class="text-center py-2 my-2 fw-bold">Manage Detajls</h3>
    </div>

    <!-- 2nd child -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-start justify-content-center">
                <div>
                    <a href="../index.php"><img src="../images/logo.png" class="admin_image" alt="logo"></a>
                    <p class="text-black text-left ms-2"> Admin Name</p>
                </div>
               
                <div class="button text-center pt-5">
                    <button class="text-light bg-black rounded-3">
                        <a href="insert_product.php" class="nav-link  m-1 p-1">Insert Products</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">View Products</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="index.php?insert_category" class="nav-link m-1 p-1">Insert Categories</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">View Categories</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="index.php?insert_brand" class="nav-link m-1 p-1">Insert Brands</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">View Brands</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">All Orders</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">All Payments</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">List Users</a>
                    </button>
                    <button class="text-light bg-black rounded-3">
                        <a href="" class="nav-link m-1 p-1">Log out</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- 4th child -->
    <div class="container">
        <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
        ?>
    </div> 


    <!-- footer--> 
    <div class="bg-danger-subtle text-dark p-3 py-4 text-center">
        <p> All rights reserved &copy; Designed by Hannah - 2024</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>