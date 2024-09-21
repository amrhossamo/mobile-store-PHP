=
<!DOCTYPE html>
<?php include 'config.php'; 
include 'adminpanel.php' ;

 ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    

    <title>products</title>
</head>

<body>
    

<table class="container table table-bordered table-dark ">
<H1 class="text-center ">Products</H1>
  <thead>
    <tr >
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Brand</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        
    <?php 

          
$quer = "SELECT * FROM `products`";
$do = mysqli_query($conn,$quer);
  if($do){
        while($row=mysqli_fetch_assoc($do) ){
        $id = $row ['id'];
        $name = $row ['product_name'];
        $price = $row ['product_price'];
        $img = $row ['product_img'];
        $brand = $row ['product_brand'];
        $desc = $row ['product_description'];
        $quan = $row ['product_quantity'];
        $cate = $row ['product_category'];
       



     
      echo '
      
      <tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td ><img style="width: 5rem;" src="'.$img.'" alt=""></td>
      <td>'.$brand.'</td>
      <td>'.$desc.'</td>
      <td>'.$quan.'</td>
      <td>'.$cate.'</td>

      <td>
          
              <button"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
          
          <a href="updateproducts.php?updateid='.$id.'">Update</a>
      </td>

  </tr>     
      ';
  }
}


?>
  

      

                 



        </table>
</body>

</html>