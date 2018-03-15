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
	padding-top: 20px;">Alerts</h1>			
		</div>

			<br>
		<div class="row mobileHide">
			<h2>Alert Warning</h2>
	<div class="alert-warning col fourSixth" style="margin-top: 90px; margin-left: -180px; max-width: 600px;">
	  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<strong>Warning!</strong> This site might contain a virus.
	</div>
		</div>
				<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;alert-warning&quot;&gt;
	&lt;span class=&quot;closebtn&quot; onclick=&quot;this.parentElement.style.display='none';&quot;&gt;&amp;times;&lt;/span&gt;
	&lt;strong&gt;Warning!&lt;/strong&gt; This site might contain a virus.
&lt;/div&gt;
			  </code></pre>
    		</div>
    </div>
    		<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
	<div class="coding-bg col">
		<pre><code class="css">
.alert-warning{
	padding: 20px;
	width: 800px;
	background-color: red;
	color: white;
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

.fourSixth{
	flex-grow: 0;
	flex-basis: 62.666%;
}
.fiveSixth{
	flex-grow: 0;


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
	
	<div class="row mobileHide">

		<h2>Alert Notice</h2>
		<div class="alert-notice col fourSixth tabletFull" style="margin-top: 90px; margin-left: -100px; max-width: 600px;">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				<strong><i class="fas fa-info-circle" style="font-size: 25px;"></i></i></strong> Your form has been sent.
		</div>
	</div>

		<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;alert-notice&quot;&gt;
	  &lt;span class=&quot;closebtn&quot; onclick=&quot;this.parentElement.style.display='none';&quot;&gt;&amp;times;&lt;/span&gt;
	&lt;strong&gt;&lt;i class=&quot;fas fa-info-circle&quot; style=&quot;font-size: 25px;&quot;&gt;
	&lt;/i&gt;&lt;/i&gt;&lt;/strong&gt; Your form has been sent.
&lt;/div&gt;	
			</code></pre>
    	</div>
    </div>		


		<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
	<div class="coding-bg col">
		<pre><code class="css">

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





























<!-- MOBILE -->


	<div class="container-mobile mobileShow">
		<div class="row mobileShow">
		  <div class="col fiveSixth tabletOneThird">
			<h2>Alerts</h2>
			</div>
		</div>
		<div class="row">
	<div class="alert-warning col fourSixth tabletFull">
	  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<strong>Warning!</strong> This site might contain a virus.
	</div>
		</div>
		<div class="row">
					<h3 class="m-text">HTML</h3>
		 	<div class="coding-bg col tabletOneThird">
			  <pre><code class="html">
&lt;div class=&quot;alert-warning&quot;&gt;
	&lt;span class=&quot;closebtn&quot; onclick=&quot;this.parentElement.style.display='none';&quot;&gt;&amp;times;&lt;/span&gt;
	&lt;strong&gt;Warning!&lt;/strong&gt; This site might contain a virus.
&lt;/div&gt;
			  </code></pre>
    		</div>
    	</div>

  		<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col" style="height: 300px;">
        <pre><code class="css">
.alert-warning{
	padding: 20px;
	width: 800px;
	background-color: red;
	color: white;
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

.fourSixth{
	flex-grow: 0;
	flex-basis: 62.666%;
}
.fiveSixth{
	flex-grow: 0;


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





	
	<div class="row">
		<div class="alert-notice col fourSixth tabletFull"">
		  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
				<strong><i class="fas fa-info-circle" style="font-size: 25px;"></i></i></strong> Your form has been sent.
		</div>
	</div>
			<div class="row">
						<h3 class="m-text">HTML</h3>
		 	<div class="coding-bg col tabletOneThird">
			  <pre><code class="html">
&lt;div class=&quot;alert-notice&quot;&gt;
	  &lt;span class=&quot;closebtn&quot; onclick=&quot;this.parentElement.style.display='none';&quot;&gt;&amp;times;&lt;/span&gt;
	&lt;strong&gt;&lt;i class=&quot;fas fa-info-circle&quot; style=&quot;font-size: 25px;&quot;&gt;
	&lt;/i&gt;&lt;/i&gt;&lt;/strong&gt; Your form has been sent.
&lt;/div&gt;
			  </code></pre>
    		</div>
    	</div>

  		<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col" style="height: 300px;">
        <pre><code class="css">
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


</body>
</html>