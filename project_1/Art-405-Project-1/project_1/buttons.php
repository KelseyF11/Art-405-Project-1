<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buttons</title>
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

.btn{
	background-color: #009fd4;
	border: none;
	color: #ffffff;
	cursor: pointer;
	font-size: 16px;
	padding: 14px 28px;
}

.btn-hover:hover{
	background-color: #3455db;
}
.btn-rounded{
	border-radius: 4px;
}
.btn-shadow-hover:hover{
	box-shadow: 0px 3px #888888;
}

h1{
	padding-left: 5px;
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
		<h2>Buttons</h2>
		<hr>
		<button class="btn">Button</button>
		<button class="btn btn-shadow-hover">Button</button>
		<button class="btn btn-hover">Button</button>
		<button class="btn btn-hover btn-rounded">Button</button>

	</div>
</body>
</html>