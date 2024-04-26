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
<body>
    <div class="container-fluid ">
        <h2 class="text-center text-uppercase fw-bold mt-5">
            Login 
        </h2>
       <div class="row d-flex align-item-center justify-content-center">
        <div class="lg-12 col-xl-6 ">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- username -->
                <div class="form-outline my-4 w-75 m-auto">
                    <label for="user_username" class="form-label fw-bold">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your username" required="required" name="user_username"/>
                </div>

                <!-- password -->
                <div class="form-outline mb-4 w-75 m-auto">
                    <label for="user_password" class="form-label fw-bold">Password</label>
                    <input type="text" id="user_password" class="form-control" placeholder="Enter your email" required="required"  name="user_password"/>
                </div>

                <!-- button -->
                <div class="text-center mt-2">
                    <input type="submit" value="Login" class="btn btn-dark fw-bold px-5" name="user_login">
                    <p class="fw-bold my-3"> Don't have an account? <a href="user_registration.php" class="text-danger"> Register now</a></p>
                </div>
            </form>

        </div>
       </div>
    </div>

    <?php
        if(isset($_POST['user_login'])){
            $user_username=$_POST['user_username'];
            $user_password=$_POST['user_password'];
            $select_query="Select * from `user_table` where username='$user_username'";
            $result=mysqli_query($con,$select_query);
            $row_count=mysqli_num_rows($result);
            $row_data=mysqli_fetch_assoc($result);
            $user_ip=getIPAddress();

            //cart item
            $select_query_cart="Select * from `cart_details` where ip_address='$user_ip'";
            $select_cart=mysqli_query($con,$select_query_cart);
            $row_count_cart=mysqli_num_rows($select_cart);
            if($row_count>0){
                $_SESSION['username']=$user_username;
                if(password_verify($user_password,$row_data['user_password'])){
                    //echo "<script>alert('Login Successful')</script>";
                    if($row_count['']== 1 and $row_count_cart==0){
                        $_SESSION['username']=$user_username;
                        echo "<script>alert('Login Successful')</script>";
                        echo "<script>window.open('profile.php','_self')</script>";
                    }else{
                        $_SESSION['username']=$user_username;
                        echo "<script>alert('Login Successful')</script>";
                        echo "<script>window.open('payment.php','_self')</script>";
                    }
                }else{
                    echo "<script>alert('Invalid Credientials')</script>";
                }
            }else{
                echo "<script>alert('Invalid Credientials')</script>";
            }
        }
    ?>



        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>