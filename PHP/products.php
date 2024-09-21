<?php include 'config.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/navfooter.css">
    <link rel="stylesheet" href="css/trips.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Products</title>
</head>


<?php 
     $query = "SELECT * FROM `products`";
     $do = mysqli_query($conn, $query);


?>

<body>


    <div class="trips-heading">
        <h1>iphone used </h1>
    </div>
  


   <div class="container row m-auto " >
   <?php 
            foreach($do as $product){?>

   <div class="col-md-3 " style="width: 18rem;">
   
                 <img src="<?php echo ($product['product_img']) ?>"  class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text"><?php echo($product['product_category']) ?></hp>
                        <h5 class="card-title"><?php echo($product['product_name']) ?></h5>
                         <p class="card-text"><?php echo ($product['product_price']) ?>$</p>
                         <a href="singleproduct.php?product=<?php echo($product['product_name']) ?>" class="btn btn-success">More Detailes whatsapp </a>
                   </div>
  
    </div>
    <?php }
    ?>
   </div>
   


   

</body>

</html>