<?php // include 'uppperpageinfo.php';?>
<?php  // . operator is used for the concationation ?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saving Customer data</title>
    </head>
    <body>
	<center>
        <?php
		      $sname = $_POST['name'];
		     // $lname = $_POST['email'];
		      $semail = $_POST['email'];
			  $spwd = $_POST['pwd'];
              $spwd2 = $_POST['pwd2'];
		      $scontact = $_POST['contact'];
			  $city =$_POST['city'];
			   $security=$_POST['txtsec'];
			
		     $cat= 'customer';
		
		 
	echo "Customer Name is ".$sname;
	
	$con = mysqli_connect("localhost", "root", "", "freelance");
	
	$sql = "INSERT INTO customer(Name,email,pwd,cont,city,cat,securityans) VALUES ('$sname','$semail', '$spwd2','$scontact','$city','$cat','$security')";
	
	if(mysqli_query($con, $sql))
	{
    echo "Records inserted successfully.Now You can login<a href='login.php'>Click Here to login</a>";
	} 
	else
	{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}
 
// Close connection
mysqli_close($con);


echo "New records created successfully";


?>

<?php // include 'lowerpart.php';?>
    </body>
</html>
