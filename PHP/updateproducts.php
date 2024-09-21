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
    <?php include 'config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Update Products</title>
</head>

<body>



                    
 <?php 

    
    $id = $_GET ['updateid'];

    if (isset($_POST['update'])) {
        $n = htmlspecialchars($_POST['p-name']);
        $d = htmlspecialchars($_POST['p-description']);
        $p = htmlspecialchars($_POST['p-price']);
        $q = htmlspecialchars($_POST['p-quantity']);
        $c = htmlspecialchars($_POST['p-category']);
        $b = htmlspecialchars($_POST['p-brand']);
    
        // Handle file upload
        if ($_FILES['product_img']['name']) {
            $imgname = $_FILES['product_img']['name'];
            $imgtmp = $_FILES['product_img']['tmp_name'];
            $path = 'imgs/' . $imgname;
    
            move_uploaded_file($imgtmp, $path);
        } else {
            // If no new image is selected, use the existing image path
            $path = $_POST['existing_img_path'];
        }
    
        $query = "UPDATE `products` SET `product_name`='$n', `product_description`='$d', `product_price`='$p', 
                  `product_quantity`='$q', `product_img`='$path', `product_category`='$c', `product_brand`='$b' 
                  WHERE id=$id";
    
        $do = mysqli_query($conn, $query);
    
        if ($do) {
            header("location:viewproducts.php");
        }
    }
 

    
    
    ?>



<?php 


    
$id = $_GET ['updateid'];

$record = mysqli_query($conn,"SELECT * FROM `products` WHERE id=$id ");
$data = mysqli_fetch_array($record);


?>


<div class="container mt-5">
    <h1>Update Product</h1>
    <form method="post" action="" enctype="multipart/form-data">
      
        <div class="form-group">
            <label for="new_username">Name</label>
            <input type="text" class="form-control"  name="p-name" value="<?php echo $data ['product_name'] ?>">
        </div>
        <div class="form-group">
            <label for="new_password">Price</label>
            <input type="text" class="form-control"  name="p-price" value="<?php echo $data ['product_price'] ?>" >
        </div>
        <div class="form-group">
            <label for="new_email">Img</label>

            <input type="file" class="form-control" name="product_img" value="<?php echo $data ['product_img'] ?>">
        </div>
        <div class="form-group">
            <label for="new_number">Brand</label>
            <input type="text" class="form-control"  name="p-brand" value="<?php echo $data ['product_brand'] ?>">
        </div>
        <div class="form-group">
            <label for="new_number">description</label>
            <input type="text" class="form-control"  name="p-description" value="<?php echo $data ['product_description'] ?>">
        </div>
        <div class="form-group">
            <label for="new_number">quantity</label>
            <input type="number" class="form-control"  name="p-quantity" value="<?php echo $data ['product_quantity'] ?>">
        </div>
        <div class="form-group">
            <label for="new_number">category</label>
            <input type="text" class="form-control"  name="p-category" value="<?php echo $data ['product_category'] ?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
    </form>
</div>

</body>

</html>