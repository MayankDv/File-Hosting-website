<?php
  	session_start();
	$customerkaid =$_SESSION["custimpid"];
//echo "$customerkaid <br>";
		if(!$_SESSION["firstname"])
		{
			header('Location:login.php');
		}
	else
	{	


?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Modal Box Contact Form</title>
  <link rel="stylesheet" href="feedback.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
    <form action="savefeedback.php" method="GET" class="contact">
   
    <fieldset class="contact-inner">
		<h1 class="headline"> FEEDBACK </h1><br><br>
		<input type="hidden" name="cid" value="<?php echo "$customerkaid" ?>">
      <p class="contact-input">
        <input type="text" name="cname" placeholder="Your Name…" autofocus required="" />
      </p>

      <p class="contact-input">
        <input type="tel" pattern="^\d{10}$" name="csubject" placeholder="contact" autofocus required="" />
      </p>

      <p class="contact-input">
        <textarea name="cmessage" placeholder="Your Message…" required="" ></textarea>
		<a href="mainpage.php"> Back To Home </a>
      </p>

      <p class="contact-submit">
		
        <input type="submit" value="Send Message">
		
      </p>
    </fieldset>
  </form>
	
  </body>
</html>
	<?php } ?>
