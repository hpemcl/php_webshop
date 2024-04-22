<?php
  include('../includes/connect.php');  
  if(isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];

    // select data from database
    $select_query="Select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);   
    // hvis nummeret i rows er større end 0, så kommer det her script 
    if($number>0){
        echo "<script>alert('This category is present inside the database')</script>";
    }else{
        // hvis nummeret i rows er mindre end 0, så kommer det her script 
    
    $insert_query="insert into `categories` (category_title) values ('$category_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Category has been inserted succesfully')</script>";
    }
  }}
?>

<h2 class="text-left fw-semibold my-3">Categories</h2>

<form action="" method="post" class="my-4">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-danger-subtle" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert a new category" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2">
        <input type="submit" class="bg-black text-light p-2 my-2 px-5 border-0 rounded-2" name="insert_cat" value="Insert">
    </div>
</form>
