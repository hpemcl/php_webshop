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
        <h2 class="text-center text-uppercase fw-bold">
        New User Registration 
        </h2>
       <div class="row d-flex align-item-center justify-content-center">
        <div class="lg-12 col-xl-6">
            <form action="" method="post" enctype="multipart/form-data">
                <!-- username -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_username" class="form-label fw-bold">Username</label>
                    <input type="text" id="user_username" class="form-control" placeholder="Enter your username" required="required" name="user_username"/>
                </div>

                <!-- email field -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_email" class="form-label fw-bold">Email</label>
                    <input type="text" id="user_email" class="form-control" placeholder="Enter your email" required="required"  name="user_email"/>
                </div>

                <!-- profile picture-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_image" class="form-label fw-bold ">Profile picture</label>
                    <input type="file" name="user_image" id="user_image" class="form-control"  required="required">
                </div>

                <!-- password -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_password" class="form-label fw-bold">Password</label>
                    <input type="text" id="user_password" class="form-control" placeholder="Enter your email" required="required"  name="user_password"/>
                </div>

                <!-- password confirmed -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="conf_user_password" class="form-label fw-bold">Confirm password</label>
                    <input type="text" id="conf_user_password" class="form-control" placeholder="Confirm password" required="required"  name="conf_user_password"/>
                </div>

                <!-- address -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_address" class="form-label fw-bold">Address</label>
                    <input type="text" id="user_address" class="form-control" placeholder="Enter your address" required="required" name="user_address"/>
                </div>

                <!-- contact -->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="user_contact" class="form-label fw-bold">Contact</label>
                    <input type="text" id="user_contact" class="form-control" placeholder="Enter your contact" required="required" name="user_contact"/>
                </div>
            </form>

        </div>
       </div>
    </div>




        

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>