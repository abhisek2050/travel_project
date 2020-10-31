<?php
    include("../../private/config/config.php");
    include("../../private/required/body_header.inc.php");

    
?>

<div class="body__banner">
    <figure class="contact__banner-figure">
        <img src="../image/contact banner.png" alt="image">
    </figure>
    <h1 class="banner_contact-title">
        Contact
    </h1>
    <p class="banner_contact-paragraph">
        Pixel perfect design with awesome contents
    </p>
</div>
<!-- end body__banner -->

<div class="body__container">

    <section class="contact__section wrap__container  ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15553.993177987539!2d77.73376215!3d12.9399348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1603573025018!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    <!-- end contact__section -->

    <section class="information__section wrap__container">
        <h3>Get in Touch</h3>

        <div class="form__contact-section">

            <form action="" method="POST"> 

                <label for=""></label>
                <textarea name="textarea" id="textarea" cols="70" rows="8" placeholder="enter data">
                    
                </textarea>
                <br><br>
                <input type="text" placeholder="Enter Your Name" class="username" id="username">
                <label for=""></label>
                <input type="email" placeholder="Enter Your Mail" class="usermail" id="usermail">
                <br><br>
                <label for=""></label>
                <input type="text" placeholder="Enter Your Subject" class="usermsg" id="usermsg">
                <div class="send__btn">
                    <a href="#">SEND</a>
                </div>
                
            </form>


            <div class="address__detail">

                <div class="home__contact">
                    <div class="home__address">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    <div class="home__detail">
                        <ul>
                            <li>Buttonwood, California.</li>
                            <li>Rosemead, CA 91770</li>
                        </ul>
                    </div>
                </div>

                <div class="telephone__contact">
                    <div class="telephone__address">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="telephone__detail">
                        <ul>
                            <li>+1253 565 2365</li>
                            <li>Mon to Fri 9am to 6pm</li>
                        </ul>
                    </div>
                </div>

                <div class="mail__contact">
                    <div class="mail__address">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="mail__detail">
                        <ul>
                            <li>support@gmail.com</li>
                            <li>Send us your query anytime!</li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <!-- end address__detail -->

        </div>
        <!-- end form__contact-section -->

    </section>
    <!-- end information__section-->

</div>
<!-- end body__container -->













<?php
    include("../../private/required/body_footer.inc.php");
?>