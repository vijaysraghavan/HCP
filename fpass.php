<?php
	<form class="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	    <input class="required" type="text" placeholder="Your email" value="" name="email"/>
	    
	    <div class="submit-wraper">
	        <div class="button">Sign In
	            <input type="submit" value="" name="forgotpassword"/>
	        </div>
	
	    </div>
	
	</form>
        
        if (isset($_POST['forgotpassword'])) {
	    //Post Values
	    $mailto = pg_escape_string($_POST['email']);
	    $password = getPassword($mailto);
	    
	    $subject = "Your Cintria password";
	    $message = "Your password is " + $password;
	    $mailstatus = mail($mailto, $subject, $message);
	    if ($mailstatus) {
	        ?>
	        <script type="text/javascript">
	            $.notify("Email sent successfully.", 'success')
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
?>
