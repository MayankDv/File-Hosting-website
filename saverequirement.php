<?php
	session_start();
	$custid=$_SESSION["custimpid"] ;

		$oname=$_POST['oname'];
		$pname=$_POST['pname'];
		$message=$_POST['message'];
		

		$con = mysqli_connect("localhost", "root", "", "freelance");
	
	
	$sql2 = "INSERT INTO  requirement(orgname,projname,requirementlist,custid) VALUES ('$oname','$pname','$message','$custid')";
	
				if(mysqli_query($con, $sql2))
					{
						echo "<h3><b>Thanks, we will contact soon for further updates</b></h3>";
						echo "<script> alert('Account Is verified') </script>";
						
						header( "refresh:3; url=mainpage.php" ); 
					} 
				else
					{
						echo "ERROR: Could not able to execute $sql2. " . mysqli_error($con);
					}
	
?>