
<?php
	$connect=mysqli_connect("localhost","root","","study management");
	$massege="";
	if(isset($_POST['btn'])){
		//echo "<pre>";
		//print_r($_POST);
		$fname=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		
		$sql="INSERT INTO contact(name,email,phone) VALUES('$fname','$email','$phone')";
		
		if(mysqli_query($connect,$sql)){
			$massege="inserted successfully";
		}
		else{
			die("Query problem".mysqli_error($connect));
		}
		
	}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Contact US</title>
<link rel="stylesheet" href="contact.css">
<meta name="viewport" content="width=device=width,initial-scale=1">


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
<div class="contact-section">
<div class="border"></div>
<h2>Contact Us:</h2>
					<p>Name: Jasmin Jahan Puspo<br>Phone:01842429020<br>Email:puspo.neub97@gmail.com<br>Address: Kumarpara Rd, Sylhet 3100</p>
<form class="contact-form" action="" method="post">
<input type="text" name="name"class="contact-form-text" placeholder="your name">
<input type="email" name="email" class="contact-form-text" placeholder="your email">
<input type="text" name="phone"class="contact-form-text" placeholder="your phone number">
<!--<textarea class="contact-form-text" placeholder="your message"></textarea>-->
<input type="submit" name="btn" value="Send">
</form>
<footer>Copyright &copy;  Home|Contact us</footer>
</div>
</body>
</html>