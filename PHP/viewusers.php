

<?php include 'config.php';  include 'adminpanel.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Users</title>
</head>

<body>



   

<table class="container mt-5 table-bordered table-dark">
<h1 class="text-center ">Users</h1>
       <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
            </tr>
       </thead>
            <?php 
            $quer = "SELECT * FROM `signup`";
            $do = mysqli_query($conn,$quer);


              foreach($do as $view){?>
              <tbody>
                    <tr>
                        <td><?php echo $view['id']; ?></td>
                        <td><?php echo $view['username']; ?></td>
                        <td><?php echo $view['password'] ?></td>
                        <td><?php echo $view['email'] ?></td>
                        <td><?php echo $view['number'] ?></td>
                   </tr>   
              </tbody>     
  

             <?php }
                ?>
            <tr>
          
                  

        
</body>

</html>