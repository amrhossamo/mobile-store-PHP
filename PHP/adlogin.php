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
    <title>Admin Login</title>
</head>
<body>

<?php 
    $wn = '';
    $wp = '';

    if(isset($_POST['submit'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if($username != 'amrhossam'){
            $wn = 'Wrong Username';
        }else {
            if ($username == 'amrhossam' && $password == 'amrhossam1'){
                header('location:adminpanel.php');
            }else {
                $wp ='wrong Password';
            }
            
        }


    }
    
    
    
    ?>


    <section class="sign-container">
        <img src="imgs/bgg.jpg" alt="">
        <div class="sign-layer">
            <div class="signbox">
                <h2>Login</h2>
                <form method="post">
                    <div class="inputbox">
                        <?php if ($wn !="") {
                            echo ('<p class="errore">' . $wn . '</p>');
                        } ?>
                        <input type="text" name="username" required value="<?php if (empty($username)){
                        } else {
                            echo($username);
                        } ?>">
                        <label for="username">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" required>
                        <label for="password">Password</label>
                        <?php if ($wp != ""){
                            echo ('<p class="errore">' . $wp . '</p>');
                        } ?>

                    </div>
                    <input type="submit" name="submit" value="Login">
                </form>
            </div>
        </div>
    </section>





</body>

</html>
