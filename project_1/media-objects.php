<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Media Objects</title>
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
			<h2>Media Objects</h2>
			<hr>
			<p></p>
		<div class="media-object">
			<img class="thumbnail" src="images/pumpkins.jpeg" width="150px">
			<h2 class="title">How to carve a pumpkin</h2>
			<p class="description">In this week's video, I will show you how to carve a pumpkin...</p>
        </div>

 	<div class="coding-bg">
		<pre><code>
&lt;div class=&quot;media-object&quot;&gt;
  &lt;img class=&quot;thumbnail&quot; src=&quot;images/pumpkins.jpeg&quot; width=&quot;150px&quot;&gt;
	&lt;h2 class=&quot;title&quot;&gt;How to carve a pumpkin&lt;/h2&gt;
	&lt;p class=&quot;description&quot;&gt;In this week's video, I will show you how to carve a pumpkin...&lt;/p&gt;
&lt;/div&gt;
		</code></pre>
    </div>
	</div>
</body>
</html>