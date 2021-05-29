<?php
session_start();

error_reporting(0);
if(strlen($_SESSION["firstname"])==0)
	{	
		echo "Session is set";
		header('location:login.php');
	}
	else
	{
		
		$custid=$_SESSION["custimpid"] ;
		
		
	$txtpassw = $_POST['txtnew'];
		$con = mysqli_connect("localhost", "root","", "freelance");
			
				$sql="update customer set pwd='$txtpassw' where id = '$custid'";
			
				$result=mysqli_query($con,$sql);
				
  
 if(mysqli_query($con, $sql))
	{
    echo "Your Password Changed succesfully.Now You are redirect to login Page";
		 session_destroy();
		  header( "refresh:5; url=login.php" ); 
		 //header('Location:login.php');
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
	}
?>