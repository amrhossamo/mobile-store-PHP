<header>
        <nav>
        
            <a href="" class="logo">  King Phone</a>
            
            <div class="toggle-btn">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <div class="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php #about">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="index.php #contact">Contact</a></li>

                    <?php
                       session_start();

                       if(isset($_SESSION['id'])){ ?>
                        <li><a class="signup" href="profile.php">Profile</a></li>
                        <li><a class="signup" href="signout.php">Sign Out</a></li>

                       <?php } else { ?>
                          <li><a class="signin" href="signin.php">Sign In</a></li>
                         <li><a class="signup" href="signup.php">Sign Up</a></li>
                       <?php }
                    ?>   

                        <!-- <li><a class="signin" href="signin.php">Sign In</a></li>
                        <li><a class="signup" href="signup.php">Sign Up</a></li>
                        <li><a class="signup" href="profile.php">Profile</a></li> -->

                </ul>
            </div>
        </nav>
    </header>