<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hero Units</title>
	<link rel="stylesheet" href="https://use.typekit.net/qkx2kkx.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<style>

a{
	text-decoration: none;
	color: #ffffff;
	font-family: "skolar-sans-latin",sans-serif;
}
a:active { 
	text-decoration: none; 
}

a:focus { 
	text-decoration: none; 
}

a:hover{
	text-decoration: none;
}

a:visited { 
	text-decoration: none;
}

body{
	background-color: #efefef;
	margin-top: 0px;
	padding-top: 0px;
}


h1{
	padding-left: 5px;

}

h1:hover{
	text-decoration: none no-underline;
}	

header{
	width: 220px;
	background: #009fd4;
}

</style>
<body>
	<?php include 'partials/side-nav.php';?>
	<div class="container">
			<h2>Hero Units</h2>
			<hr>
			<p></p>
		<div class="hero-units">
			<div class="hero-unit-nav-bar">
				<img class="hero-unit-logo" src="images/jellyfish-logo-01.png">
				<a class="hero-units-nav-link" href="#">Home</a>
				<a class="hero-units-nav-link" href="#">Products</a>
				<a class="hero-units-nav-link" href="#">Contact</a>
				<a class="hero-units-nav-link" href="#">About</a>
			</div>
			<div>
					<img src="images/jellyfish-3.jpg">
					<button class="hu-btn">Book Now</button>
			</div>	
	</div>
</body>
</html>