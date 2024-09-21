
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
    <title>Add Product</title>
</head>
<body>
<?php include 'config.php'; 
include 'adminpanel.php' ?>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            
                    <input type="text" name="product_name" placeholder="Product Name">
                    <input type="text" name="product_price" placeholder="Product Price">
                    <input type="file" name="product_img" placeholder="Product Image">
                    <input type="text" name="product_brand" placeholder="Product Brand">
                    <input type="text" name="product_description" placeholder="Product Description">
                    <input type="text" name="product_quantity" placeholder="Product Quantity">
                    <input type="text" name="product_category" placeholder="Product Category">
                    
                

            <input type="submit" name="submit" value="Add Product">
        </form>
    </div>
    <?php 

    if(isset($_POST['submit'])){
        $n = htmlspecialchars($_POST['product_name']);
        $d = htmlspecialchars($_POST['product_description']);
        $p = htmlspecialchars($_POST['product_price']);
        $q = htmlspecialchars($_POST['product_quantity']);
        // $img = htmlspecialchars($_POST['Product Image']);
        $c = htmlspecialchars($_POST['product_category']);
        $b = htmlspecialchars($_POST['product_brand']);

        $imgname = $_FILES['product_img']['name'];
        $imgtmp = $_FILES['product_img']['tmp_name'];
        $path = 'imgs/' . $imgname;

        move_uploaded_file($imgtmp,$path);
        


        $quer ="INSERT INTO `products` (`product_name`,`product_price`,`product_img`,`product_brand`,`product_description`,`product_quantity`,`product_category`) VALUES 
        ('$n','$p','$path','$b','$d','$q','$c')" ;

        $do = mysqli_query($conn, $quer);

    }
    
    
    ?>

</body>
</html>
