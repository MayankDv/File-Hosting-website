<!DOCTYPE html>
<html lang="en">
<head>
<title>Official Corporate Category Flat Bootstrap Responsive Website Template | Home</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Official Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<!-- //css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<!--//web font-->

</head>
<body>
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
<center>
		
		<table>
		<form action="change2.php" method="post">
			 <tr>
			 <td> Please enter New Password : </td>
			 <td> <input type="password" required name="txtnew" value="" /> </td>
			</tr>
			
			
			<tr>
			 <td> <input type="submit" name="btn" value="submit" /> </td>
			 <td> <input type="reset" name="btn2" value="Clear" /> </td>
			</tr>
		</form>	
		</table>
		
</center>
<?php }?>