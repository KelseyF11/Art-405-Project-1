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
	<script type="css.escape.js"></script>
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

	<div class="container mobileHide">
		<div class="row mobileHide">
			<h1 class="col tabletFull" style="padding-bottom: 20px;
	padding-top: 20px;">Badges</h1>			
		</div>
		
			<br>
			<h2>Icon Badge</h2>
				<span class="badge"></span>
				<button class="badge-btn">5</button>
			<div style="color: white; font-size: 30px; margin-left: 8px; margin-top:-1px;"><i class="fas fa-comment"></i>
			</div>
			<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;span class=&quot;badge&quot;&gt;&lt;/span&gt;
    &lt;button class=&quot;badge-btn&quot;&gt;5&lt;/button&gt;
	&lt;div style=&quot;color: white; font-size: 30px; margin-left: 8px; margin-top:-1px;&quot;&gt;
	&lt;i class=&quot;fas fa-comment&quot;&gt;&lt;/i&gt;&lt;/div&gt;
			</code></pre>
    	</div>
    </div>

<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
	<div class="coding-bg col">
		<pre><code class="css">
.badge{
  height: 50px;
  width: 50px;
  background-color: #009fd4;
  border-radius: 25px;
  display: inline-block;
  margin-bottom: -46px;
}

.badge-btn{
	border-radius: 100%;
	color: white;
	background-color:#ff9f35;
	font: 5px;
	border-style: none;
	font-weight: 500;
	font-family: "skolar-sans-latin",sans-serif;
	margin-left: -20px;
}

.coding-bg{
	background-color: transparent;
	padding-left: 15px;
	padding-right: 15px;
	width: 800px;
	border-radius: 5px;
	padding: 8px 1%;
	margin: 5px .5%;
	margin-top: 10px;
	overflow-x: scroll;
	overflow-y: scroll;
	height: 200px; 
}
.col{
	padding: 5px 1%;
	margin: 5px .5%;
	flex-grow: 0;
}

.container{
	max-width: 960;
	margin: 0 auto;
	left:300px; top:-20px; right:0; bottom:0;
	position: absolute;
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









			<br>
			<h2>Message Badge</h2>
			<div class="row mobileHide fourSixth pd-r">
		<div class="badge-msg col">
			<button class="btn btn-hover">Messages</button>
			<button class="badge-btn-red">5</button>
		</div>
		<div style="margin-top: 50px; margin-left: -280px; padding-left: 100px; padding-bottom: 0px;">
		<h3 class= "m-text">HTML</h3>
		</div>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;badge-msg&quot;&gt;
	&lt;button class=&quot;btn btn-hover&quot;&gt;Messages&lt;/button&gt;
	&lt;button class=&quot;badge-btn-red&quot;&gt;5&lt;/button&gt;
&lt;/div&gt;
			  </code></pre>
    	</div>
    </div>
<div>
		<h3 class= "m-text">CSS</h3>
		</div>
<div class="row mobileHide fourSixth pd-r">
	<div class="coding-bg col">
		<pre><code class="css">
.badge-msg{
padding: 10px;
padding-top: 30px;
}

.badge-btn-red{
	border-radius: 100%;
	color: white;
	background-color: rgb(244, 66, 66);
	font: 5px;
	border-style: none;
	font-weight: 500;
	font-family: "skolar-sans-latin",sans-serif;
	margin-left: -30px;
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

.coding-bg{
	background-color: transparent;
	padding-left: 15px;
	padding-right: 15px;
	width: 800px;
	border-radius: 5px;
	padding: 8px 1%;
	margin: 5px .5%;
	margin-top: 10px;
	overflow-x: scroll;
	overflow-y: scroll;
	height: 200px; 
}

.col{
	padding: 5px 1%;
	margin: 5px .5%;
	flex-grow: 0;
}

.container{
	max-width: 960;
	margin: 0 auto;
	left:300px; top:-20px; right:0; bottom:0;
	position: absolute;
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
</div>




<!-- MOBILE -->


	<div class="container-mobile mobileShow">
		<div class="row mobileShow">
		  <div class="col fiveSixth tabletOneThird">
						<br>
			<h2>Icon Badge</h2>
				<span class="badge"></span>
				<button class="badge-btn">5</button>
			<div style="color: white; font-size: 30px; margin-left: 8px; margin-top:-1px;"><i class="fas fa-comment"></i>
			</div>
			<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;span class=&quot;badge&quot;&gt;&lt;/span&gt;
    &lt;button class=&quot;badge-btn&quot;&gt;5&lt;/button&gt;
	&lt;div style=&quot;color: white; font-size: 30px; margin-left: 8px; margin-top:-1px;&quot;&gt;
	&lt;i class=&quot;fas fa-comment&quot;&gt;&lt;/i&gt;&lt;/div&gt;
			</code></pre>
    	</div>
    </div>

<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
	<div class="coding-bg-sm col" style="height: 300px;">
		<pre><code class="css">
.badge{
  height: 50px;
  width: 50px;
  background-color: #009fd4;
  border-radius: 25px;
  display: inline-block;
  margin-bottom: -46px;
}

.badge-btn{
	border-radius: 100%;
	color: white;
	background-color:#ff9f35;
	font: 5px;
	border-style: none;
	font-weight: 500;
	font-family: "skolar-sans-latin",sans-serif;
	margin-left: -20px;
}

.coding-bg{
	background-color: transparent;
	padding-left: 15px;
	padding-right: 15px;
	width: 800px;
	border-radius: 5px;
	padding: 8px 1%;
	margin: 5px .5%;
	margin-top: 10px;
	overflow-x: scroll;
	overflow-y: scroll;
	height: 200px; 
}
.col{
	padding: 5px 1%;
	margin: 5px .5%;
	flex-grow: 0;
}

.container{
	max-width: 960;
	margin: 0 auto;
	left:300px; top:-20px; right:0; bottom:0;
	position: absolute;
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

			<hr>
			<br>
			<h2>Message Badge</h2>
			<div class="row mobileShow fourSixth pd-r">
		<div class="badge-msg col">
			<button class="btn btn-hover">Messages</button>
			<button class="badge-btn-red">5</button>
		</div>
		<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;div class=&quot;badge-msg&quot;&gt;
	&lt;button class=&quot;btn btn-hover&quot;&gt;Messages&lt;/button&gt;
	&lt;button class=&quot;badge-btn-red&quot;&gt;5&lt;/button&gt;
&lt;/div&gt;
			  </code></pre>
    	</div>
    </div>
    <h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
	<div class="coding-bg-sm col" style="height: 300px;">
		<pre><code class="css">
.badge-msg{
padding: 10px;
padding-top: 30px;
}

.badge-btn-red{
	border-radius: 100%;
	color: white;
	background-color: rgb(244, 66, 66);
	font: 5px;
	border-style: none;
	font-weight: 500;
	font-family: "skolar-sans-latin",sans-serif;
	margin-left: -30px;
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

.coding-bg{
	background-color: transparent;
	padding-left: 15px;
	padding-right: 15px;
	width: 800px;
	border-radius: 5px;
	padding: 8px 1%;
	margin: 5px .5%;
	margin-top: 10px;
	overflow-x: scroll;
	overflow-y: scroll;
	height: 200px; 
}

.col{
	padding: 5px 1%;
	margin: 5px .5%;
	flex-grow: 0;
}

.container{
	max-width: 960;
	margin: 0 auto;
	left:300px; top:-20px; right:0; bottom:0;
	position: absolute;
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




		  </div>
		</div>
	</div>




	
</body>
</html>