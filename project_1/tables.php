<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tables</title>
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
			<h2>Tables</h2>
			<hr>
			<p></p>
		<table>
		  <tr class="table-tr">
		    <th class="table-col">Company</th>
		    <th class="table-col">Contact</th>
		    <th class="table-col">Country</th>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Alfreds Futterkiste</td>
		    <td class="table-row">Maria Anders</td>
		    <td class="table-row">Germany</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Centro comercial Moctezuma</td>
		    <td class="table-row">Francisco Chang</td>
		    <td class="table-row">Mexico</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Ernst Handel</td>
		    <td class="table-row">Roland Mendel</td>
		    <td class="table-row">Austria</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Island Trading</td>
		    <td class="table-row">Helen Bennett</td>
		    <td class="table-row">UK</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Laughing Bacchus Winecellars</td>
		    <td class="table-row">Yoshi Tannamuri</td>
		    <td class="table-row">Canada</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Magazzini Alimentari Riuniti</td>
		    <td class="table-row">Giovanni Rovelli</td>
		    <td class="table-row">Italy</td>
		  </tr>
		</table>
	</div>
</body>
</html>