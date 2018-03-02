<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cards</title>
	<link rel="stylesheet" href="https://use.typekit.net/qkx2kkx.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
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

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    width: 350px;
}


h1{
	padding-left: 5px;
}

h4{
	font-family: "skolar-sans-latin",sans-serif;
	color: #3455db;
	font-size: 26px;
}

header{
	width: 220px;
	background: #009fd4;
}

.info {
    padding: 2px 10px;
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
			<h2>Cards</h2>
			<hr>
		<div class="card">
				<img src="http://via.placeholder.com/350x380" alt="Placeholder"">
		 	<div class="info">
		 		<h4>Card</h4>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		 	</div>
		</div>


	</div>
</body>
</html>