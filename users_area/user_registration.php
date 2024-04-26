<!-- php - connect file -->
<?php
    include('../includes/connect.php');
    include('../functions/common_function.php');
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing.com | User registration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body class="bg-success-subtle">
    <div class="container-fluid">
        <h2 class="text-center text-uppercase fw-bold mt-5">
        New User Registration 
        </h2>
       <div class="row d-flex align-item-center justify-content-center">
        <div class="lg-12 col-xl-6 ">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- username -->
                <div class="form-outline my-4 w-75 m-auto">
                    <label for="user_username" class="form-label fw-bold">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your username" required="required" name="user_username"/>
                </div>

                <!-- email field -->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="user_email" class="form-label fw-bold">Email</label>
                    <input type="text" id="user_email" class="form-control" placeholder="Enter your email" required="required"  name="user_email"/>
                </div>

                <!-- profile picture-->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="user_image" class="form-label fw-bold ">Profile picture</label>
                    <input type="file" name="user_image" id="user_image" class="form-control"  required="required">
                </div>

                <!-- password -->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="user_password" class="form-label fw-bold">Password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your email" required="required"  name="user_password"/>
                </div>

                <!-- password confirmed -->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="conf_user_password" class="form-label fw-bold">Confirm password</label>
                    <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm password" required="required"  name="conf_user_password"/>
                </div>

                <!-- address -->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="user_address" class="form-label fw-bold">Address</label>
                    <input type="text" id="user_address" class="form-control" placeholder="Enter your address" required="required" name="user_address"/>
                </div>

                <!-- contact -->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="user_contact" class="form-label fw-bold">Contact</label>
                    <input type="text" id="user_contact" class="form-control" placeholder="Enter your contact" required="required" name="user_contact"/>
                </div>

                <!-- button -->
                <div class="text-center mt-2">
                    <input type="submit" value="Register" class="btn btn-dark fw-bold px-5" name="user_register">
                    <p class="fw-bold my-3"> Already have an account?? <a href="user_login.php" class="text-danger"> Login </a></p>
                </div>
            </form>

        </div>
       </div>
    </div>




        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

<!-- php code -->
<?php
    if(isset($_POST['user_register'])) {
        $user_username=$_POST['user_username'];
        $user_email=$_POST['user_email'];
        $user_password=$_POST['user_password'];
        $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
        $conf_user_password=$_POST['conf_user_password'];
        $user_address=$_POST['user_address'];
        $user_contact=$_POST['user_contact'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_tmp=$_FILES['user_image']['tmp_name'];
        $user_ip=getIPAddress();

        // select query
        $select_query="Select * from `user_table` where username='$user_username' or user_email='$user_email'";
        $result=mysqli_query($con,$select_query);
        $rows_count=mysqli_num_rows($result);
        if($rows_count> 0){
            echo "<script>alert('Username and/or Email already exist')</script>";
        }else if($user_password!=$conf_user_password){
            echo "<script>alert('Passwords do not match, try again')</script>";
        }
        
        else{
            // insert query
            move_uploaded_file($user_image_tmp,"./user_images/$user_image");
            $insert_query="insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) 
            values ('$user_username','$user_email','$hash_password','$user_image','$user_ip','$user_address','$user_contact')";
            $sql_execute=mysqli_query($con,$insert_query);
        }

        // selecting cart items
        $select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
        $result_cart=mysqli_query($con,$select_cart_items);
        $rows_count=mysqli_num_rows($result_cart);
        if($rows_count>0){
            $_SESSION['username']=$user_username;
            echo "<script>alert('You have items in your cart')</script>";
            echo "<script>window.open('checkout.php','_self'</script>";
        }else{
            echo "<script>window.open('../index.php','_self'</script>";
        }
    }
?>