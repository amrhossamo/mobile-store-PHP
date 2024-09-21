<?php include 'config.php';  ?>




</div>
<section id="contact" class="contact-container">
        <!-- <img class="contact-img" src="imgs/bggg.jpg" alt=""> -->
        <div class="contact">
            <div class="title">
                <h2>Get In Touch</h2>
                
            </div>
            <a href="feedback.php">feedback</a>
            <div class="contact-box">
                <div class="contact-side form">
                    <h3>Send a Message</h3>
                    <form action="" method="post">
                        <div class="form-box">
                            <div class="row50">
                                <div class="inputbox">
                                    <span>First Name</span>
                                    <input type="text" name="fn" placeholder="Enter Your First Name">
                                </div>
                                <div class="inputbox">
                                    <span>Last Name</span>
                                    <input type="text" name="ln" placeholder="Enter Your Last Name">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputbox">
                                    <span>Email</span>
                                    <input type="email" name="em" placeholder="Enter Your Email Address">
                                </div>
                                <div class="inputbox">
                                    <span>Mobile Number</span>
                                    <input type="text" name="mn" placeholder="Enter Your Mobile Number">
                                </div>
                            </div>
                            <div class="row100">
                                <input type="text" class="textarea" name="tx" placeholder="Write Your Message......." />
                            </div>
                            <div class="row100">
                                <input type="submit" name="submit" value="Send">
                            </div>
                    </form>
                </div>
            </div>


            <div class="contact-side info">
                <h3>Contact Info</h3>
                <div class="infobox">
                    <div>
                        <img src="imgs/social/map.png" alt="">
                        <p>Itay el barud, Bahera <br>Egypt</p>
                    </div>
                    <div>
                        <img src="imgs/social/call.png" alt="">
                        <a href="">01018959369</a>
                    </div>
                    <div>
                        <img src="imgs/social/call.png" alt="">
                        <a href="">01122243632</a>
                    </div>
                    <ul class="some">
                        <li><a href="https://www.facebook.com/King.Phone.Iphone"><img src="imgs/social/facebook.png" alt=""></a></li>
                        <li><a href=""><img src="imgs/social/whats.png" alt=""></a></li>
             
                    </ul>
                </div>
            </div>
            <div class="contact-side map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4108.643614789891!2d31.19723431406366!3d30.009773307248057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1678021171901!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </section>


    <?php 
    if(isset($_POST['submit'])){
        $fname = htmlspecialchars($_POST['fn']);
        $lname = htmlspecialchars($_POST['ln']);
        $email = htmlspecialchars($_POST['em']);
        $num = htmlspecialchars($_POST['mn']);
        $text = htmlspecialchars($_POST['tx']);

        $name = $fname . $lname;
 
        $quer = "INSERT INTO `feedback` (`name`,`email`,`phone`,`text`,`status`) VALUES ('$name','$email','$num','$text',1)";
        $do = mysqli_query($conn,$quer);
      
    }
   
    ?>