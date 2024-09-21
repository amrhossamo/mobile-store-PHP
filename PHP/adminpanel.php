<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['login'])) {
    header("location: signin.php"); 
    exit();
}

// Check if the user is an admin
if ($_SESSION['role'] !== 'admin') {
    echo 'you are not alowed to this page'; 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <title>Admin Panel</title>
</head>

<body>

<section>
    <div class="sidebar">
        <h1 class="logo">iphone King</h1>
        <ul class="nav">
            <li class="active"><a href=""><i class="fa-brands fa-windows"></i>Dashboard</a></li>
            <li ><a href="addproduct.php"><i class="fa-solid fa-plus"></i>Add Product</a></li>
            <li><a href="viewproducts.php"><i class="fa fa-shopping-bag"></i>Products</a></li>
            <li><a href="feedback.php"><i class="fa-solid fa-envelope"></i>Messages</a></li>
            <li><a href="viewusers.php"><i class="fa-solid fa-user"></i>Users</a></li>

        </ul>
   
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('li').click(function(){
            $('li').removeClass('active');
            $(this).addClass('active')

        })

    </script>
</section>















  
        <!-- <div class=" container my-5 " >
            <h1 class="text-center">Admin Panel</h1>
  <ul class=" list-group-flush">
    <li class="list-group-item"><a href="addproduct.php">Add Products</a></li>
    <li class="list-group-item"><a href="viewproducts.php">View Products</a></li>
    <li class="list-group-item"><a href="feedback.php">View Messages</a></li>
    <li class="list-group-item"><a href="viewusers.php">View Users</a></li>
  </ul>
</div> -->
</body>

</html>