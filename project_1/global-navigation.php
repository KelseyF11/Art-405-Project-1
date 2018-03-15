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
	<div class="container mobileHide">
		<div class="row mobileHide">
			<h1 class="col tabletFull" style="padding-bottom: 20px;
	padding-top: 20px;">Global Navigation</h1>			
		</div>
			
		<div class="row mobileHide" style="padding-right: 20px;">
			<div class="hero-unit-nav-bar">
					<img class="hero-unit-logo" src="images/jellyfish-logo-01.png">
					<a class="hero-units-nav-link" href="#">Home</a>
					<a class="hero-units-nav-link" href="#">Products</a>
					<a class="hero-units-nav-link" href="#">Contact</a>
					<a class="hero-units-nav-link" href="#">About</a>
			</div>
		</div>

					<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;hero-unit-nav-bar&quot;&gt;
	&lt;img class=&quot;hero-unit-logo&quot; src=&quot;images/jellyfish-logo-01.png&quot;&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;Products&lt;/a&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;Contact&lt;/a&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>

		<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
    <div class="coding-bg col">
        <pre><code class="css">

.hero-unit-logo{
	display: block;
	padding: 0px;
	margin:0px;
}

.hero-unit-nav-bar{
color: white;
text-align: right;
padding: 18px 20px;
text-decoration: none;
font-size: 17px;
font-family: "skolar-sans-latin",sans-serif;
background-color: #01447e;
width: 800px;
}

.hero-units-nav-link{
	padding: 15px;
}

.hero-units-nav-link:hover{
border-bottom-width: 3px;
border-color: white;
border-bottom: solid;
}

		</code></pre>
	</div>
</div>


	</div>




  <!-- MOBILE -->


    <div class="container-mobile mobileShow">
        <div class="row mobileShow">
          <div class="col oneSixth tabletOneThird">
            <h2>Global Navigation</h2>
         </div>
        </div>
        <div class="row mobileShow">
			<div class=" col hero-unit-nav-bar" style="max-width: 600px; width: 320px;">
					<img class="hero-unit-logo" src="images/jellyfish-logo-01.png">
					<a class="hero-units-nav-link" href="#" style="font-size: 12px;">Home</a>
					<a class="hero-units-nav-link" href="#" style="font-size: 12px;">Products</a>
					<a class="hero-units-nav-link" href="#" style="font-size: 12px;">Contact</a>
					<a class="hero-units-nav-link" href="#" style="font-size: 12px;">About</a>
			</div>
		</div>
					<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;div class=&quot;hero-unit-nav-bar&quot;&gt;
	&lt;img class=&quot;hero-unit-logo&quot; src=&quot;images/jellyfish-logo-01.png&quot;&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;Products&lt;/a&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;Contact&lt;/a&gt;
	&lt;a class=&quot;hero-units-nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
&lt;/div&gt;
				</code></pre>
			</div>
		</div>

		<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col">
        <pre><code class="css">

.hero-unit-logo{
	display: block;
	padding: 0px;
	margin:0px;
}

.hero-unit-nav-bar{
color: white;
text-align: right;
padding: 18px 20px;
text-decoration: none;
font-size: 17px;
font-family: "skolar-sans-latin",sans-serif;
background-color: #01447e;
width: 800px;
}

.hero-units-nav-link{
	padding: 15px;
}

.hero-units-nav-link:hover{
border-bottom-width: 3px;
border-color: white;
border-bottom: solid;
}

		</code></pre>
	</div>
</div>

    </div>

</body>
</html>