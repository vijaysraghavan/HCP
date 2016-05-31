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

    <title>Literature Request</title>
   
</head>

<body data-theme="theme-2">


<!-- HEADER -->

<header class="act default-act"><a href="index.php" id="logo"><img src="img/theme-2/Cintria-Logo.png" alt=""/><img class="act"
                                                                                                           src="img/theme-2/Cintria-Logo.png"
                                                                                                           alt=""/></a>

    <div class="mob-icon"><span></span></div>
    <?php session_start();if(isset($_SESSION['name'])){?>
        <div style="float:right;color:#fff;font-size:11px;font-weight:bold;margin-right:6%;margin-top:5px;background:rgb(26, 103, 189) none repeat scroll 0%;border:1px solid rgb(26, 103, 189) none repeat scroll 0%;height:17px;border-radius:20px;padding:3px;width:188px;" ><?php echo "Welcome "." ".$_SESSION['name'];  ?></div>
    <?php }?>

    <nav>

        <ul>
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                ?>
                <li>

                    <li><a href="index.php">Overview</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="samples.php">Samples Request</a></li>
                    <li><a href="literature.php" class="act">Literature Request</a></li>
                    <li><a href="supportcases.php">Support Cases</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    
                </li>
                <li> </li>
                <!--<li style="width:50px;"><a href="#"><?php /*echo "Hi"."".$_SESSION['name']; */ ?></a></li>-->
                <?php
            }  ?>
        </ul>

    </nav>

</header>


<!-- LOADER -->

<div id="content-wrapper">

    <div class="blocks-container">

        <!-- BLOCK "TYPE 12" -->

        <div class="new-block type-12 color-background scroll-to-block" data-id="testimonials">

            <div class="container">

                <div class="row">

                    <div class="col-md-7 wow fadeInDown" data-wow-delay="0.3s">

                        <article class="normall">

                            <h2 class="h2 titel-left">literature request</h2>

                            <p>Access all literature and brochures to help provide additional guidance to your
                                patients.</p>

                        </article>

                        <div class="clear"></div>

                    </div>

                </div>
                
                <div class="clear"></div>

            </div>

            <div class="testimonials-slider wow fadeInDown" data-wow-delay="0.3s">

                <div class="swiper-container horizontal-pagination" data-autoplay="0" data-loop="0" data-speed="500"
                     data-center="0" data-slides-per-view="1">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-5 testimonials-image"><img src="img/viread.jpg" alt=""/></div>

                                    <div class="col-sm-7 col-md-6 testimonials-text">

                                        <div class="cell-view">

                                            <div class="blockquote-wrapper">

                                                <blockquote>

                                                    <p>VIREAD® is a prescription medicine used to treat chronic
                                                        (long-lasting) hepatitis B virus (HBV) in people 12 years of age
                                                        and older.</p>

                                                    <footer><cite>Gilead Sciences</cite></footer>

                                                </blockquote>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-5 testimonials-image"><img src="img/imodium.jpg" alt=""/></div>

                                    <div class="col-sm-7 col-md-6 testimonials-text">

                                        <div class="cell-view">

                                            <div class="blockquote-wrapper">

                                                <blockquote>

                                                    <p>IMODIUM® capsules help restore your body's natural rhythm, by
                                                        providing effective relief from diarrhoea symptoms.</p>

                                                    <footer><cite>Johnson & Johnson</cite></footer>

                                                </blockquote>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="container">

                                <div class="row">

                                    <div class="col-sm-5 testimonials-image"><img src="img/amyvid.jpg" alt=""/></div>

                                    <div class="col-sm-7 col-md-6 testimonials-text">

                                        <div class="cell-view">

                                            <div class="blockquote-wrapper">

                                                <blockquote>

                                                    <p>AMYViD® Amyvid is a radioactive diagnostic agent for Positron
                                                        Emission Tomography (PET) imaging of the brain to estimate
                                                        β-amyloid neuritic plaque density in adult patients with
                                                        cognitive impairment who are being evaluated for Alzheimer’s
                                                        Disease (AD) and other causes of cognitive decline.</p>

                                                    <footer><cite>Lilly</cite></footer>

                                                </blockquote>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="pagination"></div>

                    <div class="swiper-arrow left"><span aria-hidden="true"
                                                         class="glyphicon glyphicon-chevron-left"></span></div>

                    <div class="swiper-arrow right"><span aria-hidden="true"
                                                          class="glyphicon glyphicon-chevron-right"></span></div>

                </div>

            </div>

            <div class="clear"></div>

        </div>

        <!-- BLOCK "TYPE 7" -->

        <div class="block type-7 scroll-to-block" data-id="contact">

            <div class="container">

                <div class="row page-tagline">

                    <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

                        <h2 class="title">literature request form</h2>

                        <div class="description">Please fill the below form to request medicine literature</div>

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

                        <form class="literature-form" method="post">
                            <input type="hidden" value="<?php echo $_SESSION['contact_sfid']; ?>" name="contact_sfid">

                            <select name="medicines">
                                <option>Select a medicine</option>
                                <option>Viread</option>
                                <option>Imodium</option>
                                <option>Amyvid</option>
                            </select>

                                <div class="button">Request Literature

                                    <input type="submit" value="" name="submit"/>

                                </div>

                        </form>

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

include_once("functions/functions.php");
if (isset($_POST['submit'])) {
    $contact_sfid = pg_escape_string($_POST['contact_sfid']);    
    $medicine = pg_escape_string($_POST['medicines']);
    
    //Passing to add Literature Request
    $addLiteratureReequest = addLiteratureRequest($medicine, $contact_sfid);
    if ($addLiteratureReequest) {
        ?>
        <script type="text/javascript">
            $.notify("Placed literature request successfully.", 'success');
        </script>
    <?php
    }
    else{
    ?>
        <script type="text/javascript">
            $.notify("Literature request failed.", {
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

