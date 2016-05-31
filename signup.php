<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="format-detection" content="telephone=no"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css"/>

    <link href="css/devices.min.css" rel="stylesheet" type="text/css"/>

    <link href="css/style.css" rel="stylesheet" type="text/css"/>

    <link href="css/animate.css" rel="stylesheet" type="text/css"/>

    <link rel="shortcut icon" href="img/favicon.ico"/>

    <title>Sign Up</title>
   <!-- <style>
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 7px 14px;
            font-size: 14px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #308C9E;
            border-radius: 14px;
            /*  margin: -7px -133px;*/
            float: right;
        }

    </style>-->


</head>

<body data-theme="theme-2">


<!-- HEADER -->

<header class="act default-act"><a href="index.php" id="logo"><img src="img/theme-2/Cintria-Logo.png" alt=""/><img class="act"
                                                                                                           src="img/theme-2/Cintria-Logo.png"
                                                                                                           alt=""/></a>

    <div class="mob-icon"><span></span></div>
    <?php session_start();if(isset($_SESSION['name'])){?>
        <div style="float:right;color:#fff;font-size:11px;font-weight:bold;margin-right:6%;margin-top:5px;background:rgb(26, 103, 189) none repeat scroll 0%;border:1px solid rgb(26, 103, 189) none repeat scroll 0%;height:17px;border-radius:20px;padding:3px;width:188px;"><?php echo "Welcome "." ".$_SESSION['name'];  ?></div>
    <?php }?>
    <nav>

        <ul>
            <li><a href="index.php">Overview</a></li>
            <li><a href="signup.php" class="act">Signup</a></li>
            <li><a href="signin.php">Sign In</a></li>
        </ul>

    </nav>

</header>


<!-- LOADER -->

<div id="content-wrapper">

    <div class="blocks-container">


        <!-- BLOCK "TYPE 11" -->

        <!--div class="container">

          <div class="new-block">

            <div class="row page-tagline">

              <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

                <h2 class="title">Contact</h2>

              </div>

            </div>

          </div>

        </div-->


        <!-- BLOCK "MAP" -->

        <!--div>

          <div id="map-canvas" data-lat="43.653226" data-lng="-107.383184" data-zoom="7"> </div>

          <div class="addresses-block"> <a data-lat="43.653226" data-lng="-107.383184" data-string="1. Here is some address or email or phone or something else..."></a> <a data-lat="57.653226" data-lng="-77.383184" data-string="2. Here is some address or email or phone or something else..."></a> </div>

        </div-->


        <!-- BLOCK "TYPE 7" -->

        <div class="block type-7 scroll-to-block" data-id="contact">

            <div class="container">

                <div class="row page-tagline">

                    <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

                        <h2 class="title">sign up</h2>

                        <div class="description">One account is all you need</div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.3s">

                        <div class="contact-thumbs"><img src="img/theme-2/icon7.png" alt=""/>

                            <article class="normall">

                                <p> Tel: <br>

                                    <a href="tel:+18005277449">+1 800 527 PHIZ [7449]</a></p>

                            </article>

                        </div>

                        <div class="contact-thumbs"><img src="img/theme-2/icon8.png" alt=""/>

                            <article class="normall">

                                <p> Email: <br>

                                    <a href="maito:info@phiz.co">info@phiz.co</a></p>

                            </article>

                        </div>

                    </div>

                    <div class="col-md-7 col-md-offset-1 wow fadeInRight" data-wow-delay="0.3s">

                        <form class="signup1-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <input class="required" type="text" placeholder="Your first name" value="" name="fname"/>
                            <input class="required" type="text" placeholder="Your last name" value="" name="lname"/>
                            <input class="required" type="text" placeholder="Your email" value="" name="email"/>
                            <input class="required" type="password" placeholder="Your password" value="" name="password"/>
                            <input type="text" placeholder="Your phone" value="" name="phone"/>
                            <input type="text" placeholder="Your birthdate (MM/DD/YYYY)" value="" name="birthdate"/>
                            <input type="text" placeholder="Mailing Street" value="" name="mailingstreet"/>
                            <input type="text" placeholder="Mailing City" value="" name="mailingcity"/>
                            <input type="text" placeholder="Mailing State" value="" name="mailingstate"/>
                            <input type="text" placeholder="Mailing Postal Code" value="" name="mailingpostalcode"/>
                            <input type="text" placeholder="Mailing Country" value="" name="mailingcountry"/>
                            <select name="title">
                                <option>Title</option>
                                <option>Physician</option>
                                <option>Nurse</option>
                                <option>Pharmacist</option>
                            </select>
                            <input type="text" placeholder="Department" value="" name="department"/>

                            <div class="submit-wraper">
                                <div class="button">create account
                                    <input type="submit" value="" name="submit"/>
                                </div>
                            </div>


                        </form>

                        <!-- <input type="hidden" name="mailto" value="info@vebinary.com" style="display: none;" /> -->


                    </div>

                    <div class="form-popup">

                        <div class="form-popup-close-layer"></div>

                        <div class="form-popup-content">

                            <div class="text">Lorem Ipsum Dollor Sit Ammet consectetur dim Elit</div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- FOOTER -->

        <footer>

            <div class="subscribe"><span class="subscribe-text">Stay informed our updates</span>

                <form class="subscribe-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <input type="email" placeholder="Enter your email" name="email" required/>

                    <input type="submit" value="" name="newsletter"/>

                </form>
            </div>

            <div class="footer-bottom">

                <div class="footer-linck"><a href="#">Privacy Policy</a> <a href="#">About Us </a> <a
                        href="#">Support</a> <a href="#">FAQ</a> <a href="#">Blog</a> <a href="#">Forum</a></div>

                <div class="media-icon"><a href="#"><img src="img/theme-2/c-icon.png" alt=""/></a> <a href="#"><img
                            src="img/theme-2/c-icon1.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon2.png"
                                                                                        alt=""/></a> <a href="#"><img
                            src="img/theme-2/c-icon3.png" alt=""/></a></div>

                <div class="copy"><span>© 2016 All rights reserved. Cintria</span></div>

            </div>

            <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>

        </footer>


        <!-- POPUP "VIDEO" -->

        <div class="video-popup"><span></span> <span></span>

            <iframe src="#"></iframe>

            <a href="#"></a></div>

    </div>

</div>


<!--<div class="theme-config">

        <div class="title">Select Color:</div>

        <div class="colours-wrapper">

            <div data-theme="theme-2" style="color: #fbc011;" class="entry active"></div>

            <div data-theme="theme-2" style="color: #00bbd2;" class="entry"></div>

            <div data-theme="theme-3" style="color: #4caf50;" class="entry"></div>

            <div data-theme="theme-4" style="color: #ba68c8;" class="entry"></div>

            <div data-theme="theme-5" style="color: #d80d0d;" class="entry"></div>

            <div data-theme="theme-6" style="color: #0045ad;" class="entry"></div>

            <div data-theme="theme-7" style="color: #dd137b;" class="entry"></div>

            <div data-theme="theme-8" style="color: #482d1d;" class="entry"></div>

        </div>

        <div class="open"><img src="img/gear-icon.png" alt=""><img src="img/gear-icon.png" alt=""><img src="img/gear-icon.png" alt=""></div>

    </div>-->


<script src="js/jquery-2.1.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/idangerous.swiper.min.js"></script>

<script src="js/global.js"></script>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>

<script src="js/map.js"></script>

<script src="js/wow.min.js"></script>

<script>

    var wow = new WOW(
        {

            boxClass: 'wow',      // animated element css class (default is wow)

            animateClass: 'animated', // animation css class (default is animated)

            offset: 100,          // distance to the element when triggering the animation (default is 0)

            mobile: true,       // trigger animations on mobile devices (default is true)

            live: true,       // act on asynchronously loaded content (default is true)

            callback: function (box) {

                // the callback is fired every time an animation is started

                // the argument that is passed in is the DOM node being animated

            }

        }
    );

    $(window).load(function () {

        wow.init();

    });


</script>
<script src="js/notify.js"></script>
<!--<script src="js/subscription.js"></script>-->
<?php

include_once "functions/functions.php";

if (isset($_POST['submit'])) {
    //Post Values to add
    $firstname=pg_escape_string($_POST['fname']);
    $lastname=pg_escape_string($_POST['lname']);
    $email=pg_escape_string($_POST['email']);
    $password=pg_escape_string($_POST['password']);
    $phone=pg_escape_string($_POST['phone']);
    $dateofBirth=pg_escape_string($_POST['birthdate']);
    $dob=date('Y-m-d',strtotime($dateofBirth));
    $mail_street=pg_escape_string($_POST['mailingstreet']);
    $mail_city=pg_escape_string($_POST['mailingcity']);
    $mail_state=pg_escape_string($_POST['mailingstate']);
    $mail_post_code=pg_escape_string($_POST['mailingpostalcode']);
    $mailing_country=pg_escape_string($_POST['mailingcountry']);
    $title=pg_escape_string($_POST['title']);
    $department=pg_escape_string($_POST['department']);

    //Passing to Add User
    $resultAddUser = addUser($firstname, $lastname, $email, $password, $phone, $dob, $mail_street, $mail_city, $mail_city, $mail_state, $mail_post_code, $mailing_country, $title, $department);
    if ($resultAddUser) {
        ?>
        <script type="text/javascript">
            $.notify('New user added successfully.', 'success');
            /*setTimeout(
                function () {
                    window.location.href = 'signin.php'
                }, 2000);*/

        </script>
    <?php
    return true;
    }
    else{
    ?>
        <script type="text/javascript">
            $.notify('New user creation failed.', {
                style: 'bootstrap'
            });
        </script>
        <?php
    }
}
if (isset($_POST['newsletter'])) {
    //Post Values
    $email = pg_escape_string($_POST['email']);

    //Passing values
    $addNewsLetter = addNewsLetter($email);
    if ($addNewsLetter) {
        ?>
        <script type="text/javascript">
            $.notify("Subscription was Successful", 'success')
        </script>
    <?php
    }
    else{
    ?>
        <script type="text/javascript">
            $.notify("Subscription was not Successful", {
                style: 'bootstrap'
            });
        </script>
        <?php
    }

}
?>
</body>
</html>
