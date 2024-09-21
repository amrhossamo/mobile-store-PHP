<?php 

include 'config.php'; 


if (isset($_GET['deleteid'])){
    $id=$_GET ['deleteid'];

    $quer = "DELETE FROM `products` WHERE id = $id ";
    $do = mysqli_query($conn,$quer);
    if($do){
       header("location:viewproducts.php");
    }else{
       die (mysqli_error($conn));
    }
}



?>