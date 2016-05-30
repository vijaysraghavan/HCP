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

    <title>Sign In</title>

</head>

<body data-theme="theme-2">


<!-- LOADER -->

<div id="content-wrapper">

    <div class="blocks-container">
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input class="required" type="text" placeholder="Your email" value="" name="email"/>
            
            <div class="submit-wraper">
                <div class="button">Sign In
                    <input type="submit" value="" name="login"/>
                </div>

            </div>

        </form>

        <!-- BLOCK "TYPE 7" -->

        <div class="block type-7 scroll-to-block" data-id="contact">

            <div class="container">

                <div class="row page-tagline">

                    <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">

                        <h2 class="title">sign In</h2>

                        <div class="description">One account is all you need</div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-7 col-md-offset-1 wow fadeInRight" data-wow-delay="0.3s">

                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <input class="required" type="text" placeholder="Your email" value="" name="email"/>
                            <input type="password" placeholder="Your password" value="" name="password"/>
                            
                            <p style="padding-left:100px;">
                                <a name="forgotpassword" href="javascript:window.open('fpass.php','Forgot password','width=500,height=150')">Forgot password?</a>
                            </p>
                            
                            <div class="submit-wraper">
                                <div class="button">Sign In
                                    <input type="submit" value="" name="login"/>
                                </div>

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
include_once "functions/functions.php";

if (isset($_POST['login'])) {

    $userEmail = pg_escape_string($_POST['email']);
    $userPassword = pg_escape_string($_POST['password']);

    //Login Check
    $loginUser = loginUser($userEmail, $userPassword);
    if ($loginUser) {
        session_start();
        $_SESSION['username']=$loginUser['email'];
        $_SESSION['name']=$loginUser['name'];
        $_SESSION['contact_sfid']=$loginUser['sfid'];
        ?>
        <script type="text/javascript">
            $.notify('User signed-in successfully.', 'success');
            
            setTimeout(
                function () {
                    window.location.href = 'index.php'
                }, 2000);

        </script>
    <?php
    }
    else{
    ?>
        <script type="text/javascript">
            $.notify('User sign-in failed.', {
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

