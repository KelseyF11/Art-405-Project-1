<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Badges</title>
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


h1 a{
	padding-left: 5px;

}

h1 a:hover{
	text-decoration: none no-underline;
}

header{
	width: 220px;
	background: #009fd4;
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
			<h2>Badges</h2>
			<hr>
			<p></p>	
				<span class="badge"></span>
				<button class="badge-btn">5</button>
			<div style="color: white; font-size: 30px; margin-left: 8px; margin-top:-1px;"><i class="fas fa-comment"></i>
			</div>


	</div>
</body>
</html>