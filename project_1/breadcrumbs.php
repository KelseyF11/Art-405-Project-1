<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Breadcrumbs</title>
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
			<h2>Breadcrumbs</h2>
			<hr>
			<p></p>
		<ol class="breadcrumb">
	 		<li><a href="#">Home</a></li>
	 		<li><a href="#">Second</a></li>
	 		<li class="active"> Third</li>
	 		<li><a href="#">Fourth</a></li>
		</ol>
		<div class="coding-bg">
				<pre><code>	
		&lt;ol class=&quot;breadcrumb&quot;&gt;
	 		&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
	 		&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Second&lt;/a&gt;&lt;/li&gt;
	 		&lt;li class=&quot;active&quot;&gt; Third&lt;/li&gt;
	 		&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Fourth&lt;/a&gt;&lt;/li&gt;
		&lt;/ol&gt;
				</code></pre>
    	</div>	
	</div>
</body>
</html>