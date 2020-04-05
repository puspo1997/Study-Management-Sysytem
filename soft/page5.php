
<?php
	$connect=mysqli_connect("localhost","root","","study management");
	$massege="";
	if(isset($_POST['btn'])){
		//echo "<pre>";
		//print_r($_POST);
		$fname=$_POST['username'];
		$lname=$_POST['password'];
		
		$sql="INSERT INTO registration(username,password) VALUES('$fname','$lname')";
		
		if(mysqli_query($connect,$sql)){
			$massege="inserted successfully";
		}
		else{
			die("Query problem".mysqli_error($connect));
		}
		
	}

?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Jasmin Jahan Puspo">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
	</head>	
	
	
	<body>
		<div class="background">
			<div class="head">
				<h1 class="title">Study Management System</h1>
			</div>
			<div class="subheader">
			<ul>
				<li><a href="page1.php">HOME</a></li>||
				<li><a href="page2.php">Gallery</a></li>||
				<li><a href="page3.php">Contact Us</a></li> ||
				<li><a href="page4.php ">Documents</a></li>||
				<li style="float: right; border: 1px solid gray; border-radius: 10px;"><a href="page5.php"> LOGIN </a></li>
				
				<li style="float: right; border: 1px solid gray; border-radius: 10px;"><a href="page6.php"> Registration </a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>||
			</ul>
			</div>			
		</div>
		
		
		<form action="" method="post" >
<div class ="login-box">
<h1>Login</h1>
<div class ="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Username" name="username" value="">
</div>
<div class ="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Password" name="password" value="">
</div>

<!--<input class="btn" type="button" name="" value="Sign in">-->

<!--<form class="contact-form" action="index.php" method="post">-->
<input type="submit" name="btn" value="Sign in">
</form>
</div>

	
	</body>

</html>