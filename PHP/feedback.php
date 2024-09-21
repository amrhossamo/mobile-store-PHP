

<?php  include 'config.php'; include 'adminpanel.php'  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <title>feedback</title>
</head>
<body> 
    

<table class=" container table table-bordered table-dark  ">
    <H1 class="text-center ">feedback</H1>
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Time</th>
    </tr>
  </thead>

  <tbody>
  <?php 
         $get = "SELECT * FROM `feedback` WHERE `status` = 1";
         $done = mysqli_query($conn,$get);

         foreach($done as $feedback){ ?>
    <tr>
      <th scope="row"><?php  echo $feedback['id']; ?></th>
      <td><?php  echo $feedback['name']; ?></td>
      <td><?php  echo $feedback['email']; ?></td>
      <td><?php  echo $feedback['text']; ?></td>
      <td><?php  echo $feedback['time']; ?></td>

    </tr>
     
    </tr>
    <?php }

    
    
?>
  </tbody>
</table>
</div>



    
</body>
</html>