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
	$tempusid =$_SESSION["custimpid"];
	//echo $tempusid;
?>
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
<br><br>
 <center>
    <table cellpadding="7" celllspacing="7" border="1">
		<tr>
			<th>Task Id :-</th>
			<th>Task Name :-</th>
			<th>Task duration:-</th>
			<th>Task payment:-</th>
			<th>assign date</th>
			<th>Status</th>
			
		</tr>
		<?php
			$con = mysqli_connect("localhost", "root", "", "freelance");
	
			$sql = "SELECT * from assign where 	teamfid='$tempusid'";
	
			$result=mysqli_query($con,$sql);
				
			while($cust=mysqli_fetch_assoc($result))
			{
		
			 
			
		?>
		<tr>
			<td><?php echo $cust['id'] ?></td>
			<td><?php echo $cust['projectname'] ?></td>
			<td><?php echo $cust['duration'] ?></td>
			<td><?php echo $cust['cost'] ?></td>
			<td><?php echo $cust['assigndate'] ?></td>
			<td><?php echo $cust['status'] ?></td>
			
		</tr>
	<?php
	
		}
	?>



<?php
	}
?>