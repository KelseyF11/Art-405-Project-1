<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alerts</title>
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

.alert-warning{
	padding: 20px;
	width: 800px;
	background-color: red;
	color: white;
}

.alert-notice{
	padding: 20px;
	width: 800px;
	background-color: #85bcf7;
	color: white;
	margin-top: 20px;
	border-style: solid;
	border-color: #009fd4;
	font-size: 18px;
	border-radius: 5px;
}

body{
	background-color: #efefef;
	margin-top: 0px;
	padding-top: 0px;
}

.closebtn{
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

/*.diagonal-gradient{
	background: linear-gradient(to bottom right, #009fd4, #3455db);
	padding-right: -200px;
}
*/

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
			<h2>Alerts</h2>
			<hr>
			<p>Alerts verify the user about something important.</p>
	<div class="alert-warning">
	  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<strong>Warning!</strong> This site might contain a virus.
		</div>
	<div class="alert-notice">
	  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<strong><i class="fas fa-info-circle" style="font-size: 25px;"></i></i></strong> Your form has been sent.
		</div>		
	</div>
</body>
</html>