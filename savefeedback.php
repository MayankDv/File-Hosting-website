	<?php
session_start();

error_reporting(0);
if(strlen($_SESSION["firstname"])==0)
	{	
		echo "Session is set";
		header('location:loginfreelancer.php');
	}
	else
	{
		
		$custid=$_SESSION["custimpid"] ;
		
		
?>


<?php	$con = mysqli_connect("localhost", "root", "", "freelance");

	$sql2="select * from customer where id='$custid'";
	$result2=mysqli_query($con,$sql2);
	if($cust=mysqli_fetch_assoc($result2))
	{
		$emailid = $cust['email_id'];
		//echo "$emailid";
	}
	
 $semail = $_GET['cname'];
 	//	echo "$semail";
			  $spwd = $_GET['csubject'];
    	  $contentmess = $_GET['cmessage'];
	//	echo "Customer Name is ".$semail." .he is so clever ";
	//$user_id ="100"; 
	$sql = "insert into feedback(names,contact,mess)  VALUES ('$semail','$spwd','$contentmess')";
	
	//$result=mysqli_query($con,$sql);
				
	if($result=mysqli_query($con,$sql))
	{
    echo "<center> <h1> Thanks for Your valuable feedback ..</h1>";
    echo "<a href='mainpage.php'> Back to home </a>";
	//header('Location: index.php');
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
// Close connection
mysqli_close($con);



	}
?>