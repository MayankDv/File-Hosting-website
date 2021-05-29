<?php  // . operator is used for the concationation?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		     $semail = $_POST['email'];
			  $spwd = $_POST['pwd'];
    	 
	
	
	$con = mysqli_connect("localhost", "root", "", "freelance");
	
	$sql = "SELECT * from customer where email='$semail' and pwd='$spwd'";
	
	$result=mysqli_query($con,$sql);
				
	if($cust=mysqli_fetch_assoc($result))
	{
		echo "Records fetched  successfully.";
		$userreqid = $cust['id'];
		$firstnames = $cust['Name'];
		session_start();
		// Storing session data
		$_SESSION["custimpid"] = "$userreqid";
		$_SESSION["firstname"] = "$firstnames";
		echo $_SESSION["custimpid"];
		echo $_SESSION["firstname"];
		header('Location: mainpage.php');
	} 
	else
	{
		echo "Sorry you entered wrong username or password";
		//echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
// Close connection
mysqli_close($con);

?>
 </body>
</html>
