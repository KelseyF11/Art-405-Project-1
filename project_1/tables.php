<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.typekit.net/qkx2kkx.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
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
		<div class="row">
		<div class="col fiveSixth tabletFull"> 
			<h2>Tables</h2>
		<table>
		  <tr class="table-tr">
		    <th class="table-col">Subject</th>
		    <th class="table-col">Day(s)</th>
		    <th class="table-col">Units</th>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Art, Media and Visualization</td>
		    <td class="table-row">Mon Wed</td>
		    <td class="table-row">3</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Web Design</td>
		    <td class="table-row">Fri</td>
		    <td class="table-row">3</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Motion Graphics</td>
		    <td class="table-row">Tues Thurs</td>
		    <td class="table-row">3</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Computer Graphics</td>
		    <td class="table-row">Tues</td>
		    <td class="table-row">3</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">Graphic Design III</td>
		    <td class="table-row">Mon Wed</td>
		    <td class="table-row">3</td>
		  </tr>
		  <tr class="table-tr">
		    <td class="table-row">History of Contemporary Art</td>
		    <td class="table-row">Tues</td>
		    <td class="table-row">3</td>
		  </tr>
		</table>
	  </div>
	 </div>

	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;table&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;th class=&quot;table-col&quot;&gt;Subject&lt;/th&gt;
    &lt;th class=&quot;table-col&quot;&gt;Day(s)&lt;/th&gt;
    &lt;th class=&quot;table-col&quot;&gt;Units&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;td class=&quot;table-row&quot;&gt;Art, Media and Visualization&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;Mon Wed&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;td class=&quot;table-row&quot;&gt;Web Design&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;Fri&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;td class=&quot;table-row&quot;&gt;Motion Graphics&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;Tues Thurs&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;td class=&quot;table-row&quot;&gt;Computer Graphics&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;Tues&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;td class=&quot;table-row&quot;&gt;Graphic Design III&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;Mon Wed&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;3&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr class=&quot;table-tr&quot;&gt;
    &lt;td class=&quot;table-row&quot;&gt;History of Contemporary Art&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;Tues&lt;/td&gt;
    &lt;td class=&quot;table-row&quot;&gt;3&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
			</code></pre>
    	</div>
    </div>

<div class="row mobileHide fourSixth pd-r">
	<div class="coding-bg col">
		<pre><code class="css">

.col{
	padding: 5px 1%;
	margin: 5px .5%;
	flex-grow: 0;
}

.fourSixth{
	flex-grow: 0;
	flex-basis: 62.666%;
}
.fiveSixth{
	flex-grow: 0;
}

.row{
	display: flex;
	flex-wrap: wrap;
	flex: 0;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 800px;
    background-color: #0275d8;
    color: white;
}


.table-col{
	border: 1px solid #428EFE;
    text-align: left;
    padding: 8px;}

.table-row{
	border: 1px solid #428EFE;
    text-align: left;
    padding: 8px;}

.table-tr:nth-child(even) {
    background-color: #428EFE;
}

.text-white{
	color: white;
	font-family: "skolar-sans-latin",sans-serif;
}

.text-dark-blue{
	color: #01447e; 
	font-family: "skolar-sans-latin",sans-serif;
}

.title{
	font-size: 18px;
	color: #282928;
	font-weight: 400;
    margin-top: -20px;
 }



 @media only screen and (max-width: 960px){
	.laptopHide{
		display:none;
	}
	.laptopShow{
		display:inherit;
	}
}
@media only screen and (max-width: 768px){
	.tabletFull{
		flex-grow: 0;
		flex-basis: 96%;
	}
	.tabletTwoThirds{
		flex-grow: 0;
		flex-basis: 62.666%
	}
	.tabletOneThird{
		flex-grow: 0;
		flex-basis: 29.333%
	}

}
@media only screen and (max-width: 768px){
	.col{
		flex-grow: 0;
		flex-basis: 96%;
	}
	.mobileHide{
		display: none;
	}
	.mobileShow{
		display: inherit;
	}

					</code></pre>
		    	</div>
		</div>

	</div>
</body>
</html>