
<?php

session_start();

error_reporting(0);
if(strlen($_SESSION["firstname"])==0)
	{	
		echo "Session is set";
		header('location:index.php');
	}
	else
	{
		
		$custid=$_SESSION["custimpid"] ;
		header('location:mainpage.php');
?>	


<?php


	}

?>