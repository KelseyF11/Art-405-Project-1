<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagination</title>
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
			<h2>Pagination</h2>
			<hr>
			<p></p>
		<div class="pagination">
			  <a href="#">&laquo;</a>
			  <a href="#">1</a>
			  <a href="#" class="active">2</a>
			  <a href="#">3</a>
			  <a href="#">4</a>
			  <a href="#">5</a>
			  <a href="#">6</a>
 			 <a href="#">&raquo;</a>
		</div>
		 	<div class="coding-bg">
		<pre><code>
&lt;div class=&quot;pagination&quot;&gt;
	&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
	&lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;2&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
        &lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
 	&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
		</code></pre>
    </div>
	</div>
</body>
</html>