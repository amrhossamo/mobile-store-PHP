<!DOCTYPE html>
<html lang="en">
<?php 
      include 'config.php'; 
      session_start();
      ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/sign.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/navfooter.css">
    <title>Sign In</title>
</head>

<body>

<?php

   
   if(isset($_POST['submit'])){
    $username= htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $quer =mysqli_query($conn , "SELECT * FROM signup WHERE username = '$username'") ;
    $row =mysqli_fetch_assoc($quer);

    if(mysqli_num_rows($quer) > 0){
        if($password == $row ["password"]){
            $_SESSION["login"]= true ;
            $_SESSION["id"] = $row["id"];
            $_SESSION["role"] = $row["role"];
            header("location:index.php");
        }
        else{
            echo "<script> alert ('Wrong Password'); </script> ";
        }
    }else{
        echo "<script> alert ('User Not Registered'); </script> ";
    }

   }
   

?>
<!-- <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>


              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

             

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

    <section class="sign-container">
        <img src="imgs/bg.jpg" alt="">
        <div class="sign-layer">
            <div class="signbox">
                <h2>Login</h2>
                <form method="post">
                    <div class="inputbox">
                        
                        <input type="text" name="username" required value="">
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    
                    </div>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
    </section>



</body>

</html>
