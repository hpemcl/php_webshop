<!-- php -->
<?php
    include('../includes/connect.php');
    //hvis jeg trykker på knappen insert_product, så bliver produktet inserted i databasen og på webshoppen
    if(isset($_POST['insert_product'])){
        // $variabel = values fra the import field
        $product_title=$_POST['product_title'];
        $product_description=$_POST['product_description'];
        $product_keywords=$_POST['product_keywords'];
        $product_category=$_POST['product_category'];
        $product_brands=$_POST['product_brands'];
        $product_price=$_POST['product_price'];
        $product_status='true';

        //accessing images
        $product_image1=$_FILES['product_image1']['name'];
        $product_image2=$_FILES['product_image2']['name'];
        $product_image3=$_FILES['product_image3']['name'];

        //accessing image tmp name : temperary
        $temp_image1=$_FILES['product_image1']['tmp_name'];
        $temp_image2=$_FILES['product_image2']['tmp_name'];
        $temp_image3=$_FILES['product_image3']['tmp_name'];

        //checking empty condition
        if($product_title== '' or $product_description=='' or $product_keywords=='' or $product_category=='' or $product_brands=='' 
        or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3==''){
            echo "<script>alert('Please fill all the available fields')</script>";
            exit();
        }else{
            move_uploaded_file($temp_image1,"./product_images/$product_image1");
            move_uploaded_file($temp_image2,"./product_images/$product_image2");
            move_uploaded_file($temp_image3,"./product_images/$product_image3");

            // insert query
            $insert_products="insert into `products` (product_title, product_description, product_keywords,category_id, 
            brand_id,product_image1,product_image2,product_image3,product_price,date,status) 
            value ('$product_title','$product_description','$product_keywords','$product_category','$product_brands',
            '$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

            $result_query=mysqli_query($con,$insert_products);
            if($result_query){
                echo "<script>alert('Successfully inserted the products')</script>";
            }
        }

    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">

    <style>
    .btn-hover:hover {
        background-color: white;
        color: black;
    }

</style>

</head>
<body class="bg-success-subtle">
    <div class="container my-3">
        <h1 class="text-center fw-bold">Insert Products</h1>
        <!-- form --> <!-- enctype="multipart/form-data" betyder at hvis dette er ikke på, så kan vi ik tilføje billeder -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label fw-bold ">Product title</label>
                <input type="text" name="product_title" placeholder="Enter the product title" id="product_title" class="form-control " autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label fw-bold ">Product description</label>
                <input type="text" name="product_description" placeholder="Enter the products description" id="product_description" class="form-control" autocomplete="off" required="required">
            </div>

            <!-- keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label fw-bold ">Product keywords</label>
                <input type="text" name="product_keywords" placeholder="Enter the products keywords" id="product_keywords" class="form-control" autocomplete="off" required="required">
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="" >Select a Category</option>
                    <!-- php -->
                    
                    <?php
                    //henter data fra database ind i categories så jeg kan vælge
                        $select_query="Select * from `categories`";
                        $result_query=mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($result_query)){
                            $category_title=$row['category_title'];
                            $category_id=$row['category_id'];
                            echo "<option value='$category_id' class='text-dark'>$category_title</option>";
                        }
                    ?>
                </select>
            </div>


             <!-- Brands -->
             <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">
                    <option value="">Select a Brand</option>
                        <!-- php -->
                    
                        <?php
                        //henter data fra database ind i brands så jeg kan vælge
                            $select_query="Select * from `brands`";
                            $result_query=mysqli_query($con,$select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $brand_title=$row['brand_title'];
                                $brand_id=$row['brand_id'];
                                echo "<option value='$brand_id' class='text-dark'>$brand_title</option>";
                            }
                        ?>
                    <!--    
                    <option value="">Brand1</option>
                    <option value="">Brand2</option>
                    <option value="">Brand3</option>
                    <option value="">Brand4</option>
                        -->
                </select>
            </div>

            <!-- image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label fw-bold ">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" autocomplete="off" required="required">
            </div>

            <!-- image 2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label fw-bold ">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" autocomplete="off" >
            </div>

            <!-- image 3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label fw-bold ">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" autocomplete="off" >
            </div>

            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label fw-bold ">Product price</label>
                <input type="text" name="product_price" placeholder="Enter the products price" id="product_price" class="form-control" autocomplete="off" required="required">
            </div>

            <!-- price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-hover btn-dark text-light p-2 rounded2" value="Insert Products">
            </div>
        </form>
    </div>





    <!-- footer
    <div class="bg-danger-subtle text-dark p-3 py-4 text-center">
        <p> All rights reserved &copy; Designed by Hannah - 2024</p>
    </div>
--> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>