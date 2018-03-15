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
		<div class="container mobileHide pd-r">
		<div class="row mobileHide">
			<h1 class="col tabletTwoThirds" style="padding-bottom: 20px;
	padding-top: 20px; margin-top: 50px;">Navigation Lists</h1>			
		</div>
			
        <div class="row mobileHide">
		<footer class="nav-list-footer">
			<div>
				<ul>
				  <li class="nav-list-link"><a href="#">Home</a></li>
				  <li class="nav-list-link"><a href="#">News</a></li>
				  <li class="nav-list-link"><a href="#">Contact</a></li>
				  <li class="nav-list-link"><a href="#">About</a></li>
				</ul>
			</div>
			<div>
				<ul class="nav-list-col-two">
				  <li class="nav-list-link"><a href="#">Careers</a></li>
				  <li class="nav-list-link"><a href="#">Blog</a></li>
				  <li class="nav-list-link"><a href="#">Support</a></li>
				  <li class="nav-list-link"><a href="#">Terms</a></li>
				</ul>
			</div>
			<h5 class="footer-license">&copy 2018 HTML/CSS Library. All rights reserved.</h5>
		</footer>
		</div>
				<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;footer class=&quot;nav-list-footer&quot;&gt;
	&lt;div&gt;
		&lt;ul&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;News&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div&gt;
		&lt;ul class=&quot;nav-list-col-two&quot;&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Careers&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Blog&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Support&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Terms&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	         &lt;h5 class=&quot;footer-license&quot;&gt;&amp;copy 2018 HTML/CSS Library. All rights reserved.&lt;/h5&gt;
&lt;/footer&gt;
			</code></pre>
		    </div>
		</div>


		<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
    <div class="coding-bg col">
        <pre><code class="css">
.footer-license{
	text-align: center; 
	font-family: "skolar-sans-latin",sans-serif;
	font-size: 10px;
	font-weight: 100;
}
        	
.nav-list-col-two{
	margin-top: -130px;
	margin-left: 200px;
}

.nav-list-footer{
	background-color: #01447e; 
	color:#ffffff;
	padding: 10px;
	width: 800px;
}

.nav-list-link{
	padding: 5px;
}

.nav-list-link:hover{
	color: black;
}
		</code></pre>
	</div>
</div>





	</div>

	<!-- MOBILE -->

    <div class="container-mobile mobileShow">
        <div class="row mobileShow">
          <div class="col oneSixth tabletOneThird">
            <h2>Navigation Lists</h2>
         </div>
        </div>
        <div class="row mobileShow tabletFull">
		<footer class=" nav-list-footer-sm">
			<div class="row mobileShow">
				<ul>
				  <li class="nav-list-link"><a href="#">Home</a></li>
				  <li class="nav-list-link"><a href="#">News</a></li>
				  <li class="nav-list-link"><a href="#">Contact</a></li>
				  <li class="nav-list-link"><a href="#">About</a></li>
				</ul>
			</div>
			<div>
				<ul class="nav-list-col-two">
				  <li class="nav-list-link"><a href="#">Careers</a></li>
				  <li class="nav-list-link"><a href="#">Blog</a></li>
				  <li class="nav-list-link"><a href="#">Support</a></li>
				  <li class="nav-list-link"><a href="#">Terms</a></li>
				</ul>
			</div>
			<h5 class="footer-license">&copy 2018 HTML/CSS Library. All rights reserved.</h5>
		</footer>
		</div>
				<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;footer class=&quot;nav-list-footer&quot;&gt;
	&lt;div&gt;
		&lt;ul&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;News&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div&gt;
		&lt;ul class=&quot;nav-list-col-two&quot;&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Careers&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Blog&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Support&lt;/a&gt;&lt;/li&gt;
		   &lt;li class=&quot;nav-list-link&quot;&gt;&lt;a href=&quot;#&quot;&gt;Terms&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	         &lt;h5 class=&quot;footer-license&quot;&gt;&amp;copy 2018 HTML/CSS Library. All rights reserved.&lt;/h5&gt;
&lt;/footer&gt;
			</code></pre>
		    </div>
		</div>


		<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col">
        <pre><code class="css">
.footer-license{
	text-align: center; 
	font-family: "skolar-sans-latin",sans-serif;
	font-size: 10px;
	font-weight: 100;
}
        	
.nav-list-col-two{
	margin-top: -130px;
	margin-left: 200px;
}

.nav-list-footer{
	background-color: #01447e; 
	color:#ffffff;
	padding: 10px;
	width: 800px;
}

.nav-list-link{
	padding: 5px;
}

.nav-list-link:hover{
	color: black;
}
		</code></pre>
	</div>
</div>

    </div>
</body>
</html>