
<?php
	$connect=mysqli_connect("localhost","root","","study management");
	$massege="";
	if(isset($_POST['btn'])){
		//echo "<pre>";
		//print_r($_POST);
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];
		
		$sql="INSERT INTO regi(fname,lname,email,password,repassword) VALUES('$fname','$lname','$email','$password','$repassword')";
		
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
	<title>Registration</title>
	<link rel="stylesheet" href="page6.css"/>
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
		
		<h1>Registration Form</h1>
	<form    action="" method="post">
	    <input type ="text"  name="fname" placeholder="FirstName" required>
		<input type ="text"name="lname" placeholder="LastName" required>
		<input type ="email"  name="email" placeholder="Email" required>
		<input type ="password" name="password"  placeholder="Password" required>
		<input type ="password" name="repassword" placeholder="Confirm Password" required>
		
		<!--<div>
		     <b> Gender :</b>
		     <input type="radio" id="male" name="gender"><label for="male">Male</label>
			 <input type="radio" id="female" name="gender"><label for="male">Female</label>
		</div>-->
		<input type="submit"name="btn" value="Submit">
	</form>
	
	</body>

</html>