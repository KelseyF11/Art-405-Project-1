<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms</title>
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

h3{
	color: #4d7dd1;
	font-family: "skolar-sans-latin",sans-serif;
	font-size: 27px;
}

h4{
	color: white;
	font-family: "skolar-sans-latin",sans-serif;
	font-size: 17px;
	padding: 0px

}

header{
	width: 220px;
	background: #009fd4;
}

input{
	width: 150px;
	padding: 10px;
	border-radius: 5px;
	border-top-style: none;
	border-left-style: none;
}

.list-item-alert{
	list-style-type: none;
	text-align: left;
	padding: 15px;
	padding-left: 0px;
	margin-left: -25px;
	font-size: 20px;
	color: #ffffff;
}	



</style>
<body>
	<?php include 'partials/side-nav.php';?>
	<div class="container">
			<h2>Forms</h2>
			<hr>
			<p></p>
		<div class="form-bg">
			<h3>Sign In</h3>
			<form action="/action_page.php">
				  Email:<br>
			  <input type="text" name="firstname" value="">
			  	<br>
			 <div class="form-padding-top">
				  Password:<br>
				  <input type="text" name="lastname" value="">
				  	<br><br>
			  </div>

			  <a class="submit" href="#">Submit</a>
			</form> 
		</div>
	</div>
</body>
</html>