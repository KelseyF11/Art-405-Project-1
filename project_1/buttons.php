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
.btn-rounded{
	border-radius: 4px;
}
.btn-shadow-hover:hover{
	box-shadow: 0px 3px #888888;
}

/*h1{
	padding-left: 5px;
}*/

h2{
	font-weight: 400;
	font-size: 30px;
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
	padding-top: 20px;">Buttons</h1>			
		</div>
		
		<br>
		<h2>Button</h2>

			<div class="hr"></div>
		<button class="btn">Button</button>
		<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;button class=&quot;btn&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>
    	</div>
    	<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="css">
.btn{
	background-color: #009fd4;
	border: none;
	color: #ffffff;
	cursor: pointer;
	font-size: 16px;
	padding: 14px 28px;
}

	</code></pre>
   </div>
  </div>    
		<hr>
		 <br>
	<h2>Button with a Shadow</h2>

    <button class="btn btn-shadow-hover">Button</button>
    <h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;button class=&quot;btn btn-shadow-hover&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>	
    	</div>	
    	<h3 class="m-text">CSS</h3>		
<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="css">
.btn{
	background-color: #009fd4;
	border: none;
	color: #ffffff;
	cursor: pointer;
	font-size: 16px;
	padding: 14px 28px;
}

.btn-shadow-hover:hover{
	box-shadow: 0px 3px #888888;
}
	</code></pre>
   </div>
  </div> 
		<hr>
		<br>
	<h2>Button Hover</h2>
	<button class="btn btn-hover">Button</button>
	<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;button class=&quot;btn btn-hover&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>
    	</div>
<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="css">
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

	</code></pre>
   </div>
  </div> 

		<hr>
		<br>
<h2>Button Rounded Corners</h2>
<button class="btn btn-hover btn-rounded">Button</button>
<h3 class="m-text">Html</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">	
&lt;button class=&quot;btn btn-hover btn-rounded&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>
    	</div>
	
<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="css">
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

.btn-rounded{
	border-radius: 4px;
}
	</code></pre>
   </div>
  </div> 

</div>



  <!-- MOBILE -->


    <div class="container-mobile mobileShow">
        <div class="row mobileShow">
          <div class="col oneSixth tabletOneThird">
            <h2>Button</h2>
         </div>
        </div>
			<div class="hr"></div>
		<button class="btn">Button</button>
		<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;button class=&quot;btn&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>
    	</div>
    	<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="css">
.btn{
	background-color: #009fd4;
	border: none;
	color: #ffffff;
	cursor: pointer;
	font-size: 16px;
	padding: 14px 28px;
}

	</code></pre>
   </div>
  </div>    
		<hr>
		 <br>
	<h2>Button with a Shadow</h2>

    <button class="btn btn-shadow-hover">Button</button>
    <h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;button class=&quot;btn btn-shadow-hover&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>	
    	</div>	
    	<h3 class="m-text">CSS</h3>		
<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="css">
.btn{
	background-color: #009fd4;
	border: none;
	color: #ffffff;
	cursor: pointer;
	font-size: 16px;
	padding: 14px 28px;
}

.btn-shadow-hover:hover{
	box-shadow: 0px 3px #888888;
}
	</code></pre>
   </div>
  </div> 
		<hr>
		<br>
	<h2>Button Hover</h2>
	<button class="btn btn-hover">Button</button>
	<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;button class=&quot;btn btn-hover&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>
    	</div>
<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="css">
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

	</code></pre>
   </div>
  </div> 

		<hr>
		<br>
<h2>Button Rounded Corners</h2>
<button class="btn btn-hover btn-rounded">Button</button>
<h3 class="m-text">Html</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">	
&lt;button class=&quot;btn btn-hover btn-rounded&quot;&gt;Button&lt;/button&gt;
				</code></pre>
    		</div>
    	</div>
	
<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="css">
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

.btn-rounded{
	border-radius: 4px;
}
	</code></pre>
   </div>
  </div> 

</div>







</body>
</html>