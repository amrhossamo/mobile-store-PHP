<?php include 'config.php'; 

$G = $_GET['product'];


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/navfooter.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title></title>
    </head>


    <body>
   
       <?php 
             $query = "SELECT * FROM `products` WHERE `product_name`= '$G'";
             $do = mysqli_query($conn, $query);


        ?>




        <section  style="background-color: #444;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">
        <div class="card text-black">
        <?php 
                   foreach($do as $product){?>
          <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
          <img  src="<?php  echo ($product['product_img']) ?>" 
            class="card-img-top" alt="Apple Computer" />
          <div class="card-body">
            <div class="text-center">
              <h5 class="card-title"><?php echo($product['product_name']) ?></h5>
              <p class="text-muted mb-4"><?php echo($product['product_category']) ?></p>
            </div>
            <div>
              <div class="d-flex justify-content-between">
              <h3> price :<?php echo($product['product_price']) ?>$</h3>
              </div>
              <div class="d-flex justify-content-between">
                brand :<?php echo($product['product_brand']) ?>
              </div>
              <div class="d-flex justify-content-between">
              description :<?php echo($product['product_description']) ?>
              </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4">
            <h3> quantity:  <?php echo($product['product_quantity']) ?></h3>  
            </div>
          </div>
        </div>
        <?php }
        ?>
      </div>
    </div>
  </div>
</section>


<?php  include 'footer.php'; ?>


<script src="js/nav.js"></script>


    </body>

    </html>