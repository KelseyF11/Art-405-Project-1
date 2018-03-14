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

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    width: 350px;
}


h1{
	padding-left: 5px;
}

h4{
	font-family: "skolar-sans-latin",sans-serif;
	color: #3455db;
	font-size: 26px;
}

header{
	width: 220px;
	background: #009fd4;
}

.info {
    padding: 2px 10px;
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
			<h2>Cards</h2>
<!-- 		
		<div class="card">
				<img src="http://via.placeholder.com/350x380" alt="Placeholder"">
		 	<div class="info">
		 		<h4>Card</h4>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		 	</div>
		</div>
	<div class="coding-bg">
		<pre><code>
&lt;div class=&quot;card&quot;&gt;
      &lt;img src=&quot;http://via.placeholder.com/350x380&quot; alt=&quot;Placeholder&quot;&quot;&gt;
    &lt;div class=&quot;info&quot;&gt;
	&lt;h4&gt;Card&lt;/h4&gt;
	&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;
		</code></pre>
     -->

	<div class="mobileHide row">
     <div class="card-img" style="overflow: hidden;">
      <img src="images/jellyfish-2.jpg" height="420" width="800;" style=" margin-left:-30px; border-radius: 5px;" >
    </div>
    <div class="card-info">
      <div class="card-text">
        <h1 style="padding-bottom: 20px;">World of Jellyfish</h1>
        <p>	Jellyfish have drifted along on ocean currents for millions of years, even <br>before dinosaurs lived on the Earth. Despite their name, jellyfish aren't <br>actually fish— they're invertebrates...<br> or animals with no backbones.</p>
      </div>


      <div class="card-btn">
        <button type="button">Learn more</button>
      </div>
    </div>
	</div>
		<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;card-img&quot; style=&quot;overflow: hidden;&quot;&gt;
      &lt;img src=&quot;images/jellyfish-2.jpg&quot; height=&quot;420&quot; width=&quot;800;&quot; style=&quot; margin-left:-30px; border-radius: 5px;&quot; &gt;
&lt;/div&gt;
&lt;div class=&quot;card-info&quot;&gt;
    &lt;div class=&quot;card-text&quot;&gt;
        &lt;h1 style=&quot;padding-bottom: 20px;&quot;&gt;World of Jellyfish&lt;/h1&gt;
        &lt;p&gt;	Jellyfish have drifted along on ocean currents for millions of years, even &lt;br&gt;before dinosaurs lived on the Earth. Despite their name, jellyfish aren't &lt;br&gt;actually fish&mdash; they're invertebrates...&lt;br&gt; or animals with no backbones.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;card-btn&quot;&gt;
        &lt;button type=&quot;button&quot;&gt;Learn more&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
				</code></pre>
    		</div>
    </div>





  </div>


</body>
</html>