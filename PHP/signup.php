<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/sign.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body>
    <?php include 'config.php';  ?>

    <section class="sign-container">
        <img src="imgs/bg.jpg" alt="">
        <div class="sign-layer">
            <div class="signbox">
                <h2>Sign Up</h2>
                <form action="signup.php" method="post">
                    <div class="inputbox">
                        <input type="text" name="username" required value="">
                        <label for="username">Username</label>
                    
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="confirm" required>
                        <label for="confirm">Confirm Password</label>

                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" required value="">
                        <label for="email">Email</label>

                    </div>
                    <div class="inputbox">
                        <input type="number" name="number" required value="">
                        <label for="mobile">Mobile Number</label>

                    </div>
                    <input type="submit" name="submit" value="Sign Up">
                </form>
            </div>
        </div>

    </section>

    <?php  
    session_start();

    if(isset($_POST['submit'])){
        $un = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);
        $cp = htmlspecialchars($_POST['confirm']);
        $em = htmlspecialchars($_POST['email']);
        $num = htmlspecialchars($_POST['number']);
        $dublicated = mysqli_query ($conn ,"SELECT * FROM signup WHERE username = '$un' OR email ='$em'"  );
        
        if(mysqli_num_rows($dublicated)>0){
            echo "<script> alert ('Username or Email alredy exist'); </script> ";

        }else{
            if($pass == $cp){
                $quer = "INSERT INTO `signup` (`username`,`password`,`email`,`number`) VALUES ('$un','$pass','$em','$num')";  
                $do = mysqli_query($conn,$quer); 
                echo "<script> alert ('done'); </script> ";
                header('location:signin.php');
            }else{
                echo "<script> alert ('pass not match'); </script> ";
            }
        }
       
        // if(empty($errors)){
        //     $quer = "INSERT INTO `signup` (`username`,`password`,`email`,`number`) VALUES ('$un','$pass','$em','$num')";
        
        //     

        //     $_SESSION['user']=[
        //         "username" =>$un,
        //         "email" =>$em,
        //     ];
        //     header('location:profile.php');

        // }else{
        //     var_dump($errors);
        // }

      
    }


    


    
    
    
    
    ?>

</body>

</html>