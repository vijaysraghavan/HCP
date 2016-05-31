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

    <title>Forgot password</title>

</head>

<body data-theme="theme-2">


<!-- LOADER -->

<div id="content-wrapper">

    <div class="blocks-container">
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input class="required" type="text" placeholder="Your email" value="" name="email"/>
            
            <div class="submit-wraper">
                <div class="button">Send password
                    <input type="submit" value="" name="resetpassword"/>
                </div>

            </div>

        </form>

        
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

if (isset($_POST['resetpassword'])) {
    $postValueEmail = pg_escape_string($_POST['email']);
    $getEmailDetails = getDetails($postValueEmail);
    if ($getEmailDetails) {
        $name = $getEmailDetails['name'];
        $id = base64_encode($getEmailDetails['sfid']);
        $password = $getEmailDetails['password__c'];
        $verificationCode = md5(uniqid(rand()));
        $updateCode = resetPassword($getEmailDetails['sfid'], $verificationCode);
        $subject = "Your Cintria password";
        $message = "Hello $name,<br /><br />
        Here is your Cintria password: $password<br /><br />Thank you<br /><br />Cintria Admin Team";
        $sendMail = sendLinkResetPassword($postValueEmail, $subject, $message);
        if ($sendMail) {
            ?>
            <script type="text/javascript">
                $.notify("Password was emailed successfully.", 'success')
            </script>
            <?php
        }
        else{
        ?>
            <script type="text/javascript">
                $.notify("Sending email failed.", {
                    style: 'bootstrap'
                });
            </script>
        <?php
        }
    }
}
?>
</body>
</html>

