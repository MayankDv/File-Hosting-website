<?php  // . operator is used for the concationation?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
        <?php
		     $semail = $_POST['email'];
			  $spwd = $_POST['txtsecurity'];
    	 
	
	
	$con = mysqli_connect("localhost", "root", "", "freelance");
	
	$sql = "SELECT * from team where email='$semail' and securityans='$spwd'";
	
	$result=mysqli_query($con,$sql);
				
	if($cust=mysqli_fetch_assoc($result))
	{
		echo "Records fetched  successfully.";
		$userreqid = $cust['id'];
		$firstnames = $cust['name'];
		session_start();
		// Storing session data
		$_SESSION["custimpid"] = "$userreqid";
		$_SESSION["firstname"] = "$firstnames";
		echo $_SESSION["custimpid"];
		echo $_SESSION["firstname"];
		//$result=mysqli_query($conn,$sql);



		echo "logged in";
			
						echo"session"."<br>";
						//session_start();
						$_SESSION['FOLDER']=$cust['id'];
						echo $_SESSION['FOLDER'];
					//	header("location:fileupload.php");
			
			
		
		
		
		
		
		header('Location: developerpage.php');
		
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
