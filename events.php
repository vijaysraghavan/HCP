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

    <title>Events</title>
    
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
                    <li><a href="events.php" class="act">Events</a></li>
                    <li><a href="samples.php">Samples Request</a></li>
                    <li><a href="literature.php">Literature Request</a></li>
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

        <!-- BLOCK "TYPE 10" -->

        <div class="new-block type-10 scroll-to-block" data-id="team">

            <div class="container">

                <div class="row page-tagline">

                    <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

                        <h2 class="title">educational events</h2>

                        <div class="description">Connect with a Cintria specialist in real time via VideoChat, Talk,
                            E-mail, or view online Frequently Asked Questions and Answers.
                        </div>

                    </div>

                </div>

                <div class="row wow fadeInUp" data-wow-delay="0.3s">

                    <div class="swiper-container horizontal-pagination" data-autoplay="0" data-loop="0" data-speed="500"
                         data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
                         data-md-slides="3" data-lg-slides="3">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide">

                                <div class="paddings-container">

                                    <div class="image-wrapper">

                                        <div class="image-socials-box">

                                            <div class="vertical-align">
                                                <a href="#"><img src="img/icon15.png" alt=""/></a>
                                            </div>

                                        </div>

                                        <img class="thumbnail-image" src="img/NTI.jpg" height="493" width="370" alt=""/>
                                    </div>

                                    <div class="name">AACN National Teaching Institute & Critical Care Exposition
                                    </div>

                                    <div class="position">New Orleans, LA: May 16 – 19, 2016</div>

                                    <div class="description">Learn together, share the passion and lead change at AACN's
                                        National Teaching Institute & Critical Care Exposition, May 16-19, in New
                                        Orleans (preconferences May 15). Attend the premier conference for high acuity
                                        and critical care nurses and take home new evidence-based knowledge to make an
                                        impact at the bedside.
                                    </div>
                                    
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerform">
                                        <div class="submit-wraper">
                                            <input type="hidden" value="<?php echo $_SESSION['contact_sfid']; ?>" name="contact_sfid">
                                            <input type="hidden" value="AACN National Teaching Institute & Critical Care Exposition" name="title">
                                            <div class="button">Register Event
                                                <input type="submit" name="RegisterEvent"/>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="paddings-container">

                                    <div class="image-wrapper">

                                        <div class="image-socials-box">

                                            <div class="vertical-align">
                                                <a href="#"><img src="img/icon15.png" alt=""/></a>
                                            </div>

                                        </div>

                                        <img class="thumbnail-image" src="img/mmi.png" height="493" width="370" alt=""/>
                                    </div>

                                    <div class="name">Building Evidence for 3D Printing in Medicine</div>

                                    <div class="position">Orlando, FL: May 19 – 20, 2016</div>

                                    <div class="description">The Society of Manufacturing Engineer's Building Evidence
                                        for 3D Printing in Medicine event gathers leaders in the medical community and
                                        additive manufacturing as part of an ongoing initiative to increase the impact
                                        of 3D printing for patients worldwide.
                                    </div>
                                    
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerform">
                                        <div class="submit-wraper">
                                            <input type="hidden" value="<?php echo $_SESSION['contact_sfid']; ?>" name="contact_sfid">
                                            <input type="hidden" value="Building Evidence for 3D Printing in Medicine" name="title">
                                            <div class="button">Register Event
                                                <input type="submit" name="RegisterEvent"/>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="paddings-container">

                                    <div class="image-wrapper">

                                        <div class="image-socials-box">

                                            <div class="vertical-align">
                                                <a href="#"><img src="img/icon15.png" alt=""/></a>
                                            </div>

                                        </div>

                                        <img class="thumbnail-image" src="img/ahdi.png" height="493" width="370"
                                             alt=""/></div>

                                    <div class="name">AHDI Annual Conference</div>

                                    <div class="position">Milwaukee, WI: Aug 4 – 6, 2016</div>

                                    <div class="description">Attend AHDI’s 2016 Healthcare Documentation Integrity
                                        Conference to discover new paths for healthcare documentation specialists, spark
                                        ideas for business opportunities, and stay ahead of the curve to position
                                        yourself for long-term success.
                                    </div>
                                    
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerform">
                                        <div class="submit-wraper">
                                            <input type="hidden" value="<?php echo $_SESSION['contact_sfid']; ?>" name="contact_sfid">
                                            <input type="hidden" value="AHDI Annual Conference" name="title">
                                            <div class="button">Register Event
                                                <input type="submit" name="RegisterEvent"/>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="paddings-container">

                                    <div class="image-wrapper">

                                        <div class="image-socials-box">

                                            <div class="vertical-align">
                                                <a href="#"><img src="img/icon15.png" alt=""/></a>
                                            </div>

                                        </div>

                                        <img class="thumbnail-image" src="img/acep.png" height="493" width="370"
                                             alt=""/></div>

                                    <div class="name">ACEP Scientific Assembly</div>

                                    <div class="position">Las Vegas, NV: Oct 16 – 19, 2016</div>

                                    <div class="description">Whether you’re a seasoned veteran or a brand new attendee,
                                        ACEP16 will be an experience like none other. You will find new ways to learn,
                                        new opportunities to network, and new reasons to build a solid foundation for
                                        our specialty. But there is one thing you can count on being the same – the best
                                        emergency medicine education in the world.
                                    </div>
                                    
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerform">
                                        <div class="submit-wraper">
                                            <input type="hidden" value="<?php echo $_SESSION['contact_sfid']; ?>" name="contact_sfid">
                                            <input type="hidden" value="ACEP Scientific Assembly" name="title">
                                            <div class="button">Register Event
                                                <input type="submit" name="RegisterEvent"/>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                            <div class="swiper-slide">

                                <div class="paddings-container">

                                    <div class="image-wrapper">

                                        <div class="image-socials-box">

                                            <div class="vertical-align">
                                                <a href="#"><img src="img/icon15.png" alt=""/></a>
                                            </div>

                                        </div>

                                        <img class="thumbnail-image" src="img/chc.png" height="493" width="370" alt=""/>
                                    </div>

                                    <div class="name">PCHA 2016 Connected Health Conference</div>

                                    <div class="position">National Harbor, MD: Dec 11 – 14, 2016</div>

                                    <div class="description">The Connected Health Conference is brought to you by the
                                        Personal Connected Health Alliance (PCHA), a division of HIMSS working
                                        collaboratively to achieve personal connected health for all. Shaped by PCHA’s
                                        new mission and strategy to achieve personal connected health for all, this
                                        year’s Connected Health Conference will be like none before it.
                                    </div>
                                    
                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="registerform">
                                        <div class="submit-wraper">
                                            <input type="hidden" value="<?php echo $_SESSION['contact_sfid']; ?>" name="contact_sfid">
                                            <input type="hidden" value="PCHA 2016 Connected Health Conference" name="title">
                                            <div class="button">Register Event
                                                <input type="submit" name="RegisterEvent"/>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>

                        <div class="pagination"></div>

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
<?php
include_once("functions/functions.php");
if (isset($_POST['RegisterEvent'])) {
    $title = pg_escape_string($_POST['title']);
    $contact_sfid = pg_escape_string($_POST['contact_sfid']);
    
    $registerEvent = registerEvent($title, $contact_sfid);
    
    //Passing to Add Events
    if ($registerEvent) {
        ?>
        <script type="text/javascript">
            $.notify("Event registered successfully.", 'success');
        </script>
    <?php
    }
    else{
    ?>
        <script type="text/javascript">
            $.notify("Event registration failed.", {
                style: 'bootstrap'
            });
        </script>
        <?php
    }
}

if (isset($_POST['CancelEvent'])) {
    $title = pg_escape_string($_POST['title']);
    $contact_sfid = pg_escape_string($_POST['contact_sfid']);
    
    $cancelEvent = cancelEvent($title, $contact_sfid);
    
    if ($cancelEvent) {
        ?>
        <script type="text/javascript">
            $.notify("Event registration cancelled successfully.", 'success');
            setTimeout(function () {
                window.location.href = 'events.php'
            }, 2000);
        </script>
    <?php
    }
    else{
    ?>
        <script type="text/javascript">
            $.notify("Event registration cancellation failed.", {
                style: 'bootstrap'
            });
        </script>
        <?php
    }
}
?>
</body>

</html>

