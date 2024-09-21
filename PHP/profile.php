

<?php
session_start();
include 'config.php'; 

$row = [];

if(!empty($_SESSION['id'])){
   $id = $_SESSION["id"];
   $result = mysqli_query($conn , "SELECT * FROM signup WHERE id = $id");
   $row = mysqli_fetch_assoc($result);
}
else { 
   // Redirect user to login page if not logged in
   header("Location: signin.php");
   exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
 
</head>
<body>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="imgs/social/user.png"  alt="avatar"
              class="rounded-circle img-fluid" style="width: 180px;">
            <h5 class="my-3"><?php echo $row['username']; ?></h5>
            <p class="text-muted mb-1">Welcome</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-danger"><a href="signout.php">sign out</a></button>
              <button type="button" class="btn btn-outline-primary ms-1"><a href="editprofile.php">Edit</a></button>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['username']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['number']; ?></p>
              </div>
            </div>
            <hr>
            
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Password</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['password']; ?></p>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>
</section>
  




</body>
</html>
