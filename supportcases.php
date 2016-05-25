<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="format-detection" content="telephone=no" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />

<link href="css/devices.min.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/animate.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="img/favicon.ico" />

<title>Support Cases</title>
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

    </style>
-->
</head>

<body data-theme="theme-2">



<!-- HEADER -->

<header class="act default-act"> <a href="index.php" id="logo"><img src="img/theme-2/logo.png" alt=""/><img class="act" src="img/theme-2/logo-act.png" alt=""/></a>

  <div class="mob-icon"> <span></span> </div>
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
                    <li><a href="literature.php">Literature Request</a></li>
                    <li><a href="supportcases.php" class="act">Support Cases</a></li>
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

    

    <!-- FOOTER -->

    <footer>

      <div class="subscribe"> <span class="subscribe-text">Stay informed our updates</span>

        <form class="subscribe-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

          <input type="email" placeholder="Enter your email" name="email" required/>

          <input type="submit" value="" name="newsletter"/>

        </form>

      </div>

      <div class="footer-bottom">

        <div class="footer-linck"> <a href="#">Privacy Policy</a> <a href="#">About Us </a> <a href="#">Support</a> <a href="#">FAQ</a> <a href="#">Blog</a> <a href="#">Forum</a> </div>

        <div class="media-icon"> <a href="#"><img src="img/theme-2/c-icon.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon1.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon2.png" alt=""/></a> <a href="#"><img src="img/theme-2/c-icon3.png" alt=""/></a> </div>

        <div class="copy"> <span>© 2016 All rights reserved. VHealth</span> </div>

      </div>

      <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>

    </footer>

    

    <!-- POPUP "VIDEO" -->

    <div class="video-popup"> <span></span> <span></span>

      <iframe src="#"></iframe>

      <a href="#"></a> </div>

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

                boxClass:     'wow',      // animated element css class (default is wow)

                animateClass: 'animated', // animation css class (default is animated)

                offset:       100,          // distance to the element when triggering the animation (default is 0)

                mobile:       true,       // trigger animations on mobile devices (default is true)

                live:         true,       // act on asynchronously loaded content (default is true)

                callback:     function(box) {

                  // the callback is fired every time an animation is started

                  // the argument that is passed in is the DOM node being animated

                }

            }

        );

        $(window).load(function(){

            wow.init();    

        });

        

    </script> 
<script type="text/javascript" src="js/notify.js"></script>
<!--<script src="js/subscription.js"></script>-->
<?php
include_once("functions/functions.php");
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
?>
</body>

</html>

