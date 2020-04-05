<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Jasmin Jahan Puspo">
	<title>Gallery</title>
	
<link rel="stylesheet" href="gallery.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
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
		
		
		
<div class="gallery-section">
<div class="inner-width">
<h1>My gallery</h1>
<div class="border"></div>
<div class="gallery">

<a href="img/1.jpg" class="image">
<img src="img/1.jpg" alt="">
</a>

<a href="img/2.jpg" class="image">
<img src="img/2.jpg" alt="">
</a>
<a href="img/3.jpg" class="image">
<img src="img/3.jpg" alt="">
</a>
<a href="img/4.jpg" class="image">
<img src="img/4.jpg" alt="">
</a>
<a href="img/5.jpg" class="image">
<img src="img/5.jpg" alt="">
</a>
</div>
</div>
</div>
<script>
$("gallery").magnific-popup({
delegate: 'a',
type:'image',
gallery:{
enabled:true
}
)};
</script>

	
	</body>

</html>
