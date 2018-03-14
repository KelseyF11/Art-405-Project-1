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
	<div class="container mobileHide" style="padding-right: 20px;">
			<h2>Breadcrumbs</h2>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at, fugit nisi, reiciendis voluptate!</p>

    <div class="row mobileHide breadcrumb"> 
		<div id="breadcrumb-menu">  
    <ul class="col oneSixth tabletFull">
        <li class="active"><a href="#">Breadcrumbs</a></li>
        <li><a href="#">P1</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    </ul>
	</div> 
	<h3 class="m-text">Html</h3>
		<div class="coding-bg col fourSixth">
			  <pre><code class="html">
    &lt;div class=&quot;row mobileHide breadcrumb&quot;&gt; 
		&lt;div id=&quot;breadcrumb-menu&quot;&gt;  
    &lt;ul class=&quot;col oneSixth tabletFull&quot;&gt;
        &lt;li class=&quot;active&quot;&gt;&lt;a href=&quot;#&quot;&gt;Breadcrumbs&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;P1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Projects&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Portfolio&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-home&quot;&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
	&lt;/div&gt; 
			  </code></pre>
    		</div>

    <h3 class="m-text">CSS</h3>
			<div class="coding-bg col fourSixth" style="overflow-y: scroll;">
			  <pre><code class="html">
#breadcrumb-menu{
    display: flex; 
    flex-direction: row-reverse;
}

#breadcrumb-menu-container {
    height: 220px;
    background-color: #CEE3F8;
}

#breadcrumb-menu {
    display: inline-flex; 
    left: 31%;
    top: 30%;
    font-family: Helvetica, sans-serif;
    font-size: 14px;
    line-height: 1em;
    border-radius: 2px;
    overflow: hidden; 
}

#breadcrumb-menu i {
    transform: scale(1.4);
}

#breadcrumb-menu ul {
    display: flex; 
    flex-direction: row-reverse; 
    list-style: none;
    margin: 0;
    padding: 0;
}

#breadcrumb-menu ul li {
    margin: 0;
}

#breadcrumb-menu ul li a {
    display: flex;
    font-family: sans-serif;
    font-size: 0.9em;
    font-weight: 600;
    padding: 12px 60px 12px 40px;
    margin-left: -20px;
    color: white;
    background-color: #428EFE;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 0 100px 100px 0;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4); 
}

#breadcrumb-menu ul li:hover a {
    background-color: #297EFE;
}

#breadcrumb-menu ul li:first-child a {
    box-shadow: none;
}

#breadcrumb-menu ul li.active a {
    color: #428EFE;
    background-color: #EEF5FF;
}

#breadcrumb-menu ul li.active + li a {
    box-shadow: none;
}
			  </code></pre>
    		</div>


    </div>




		  <div class="row mobileHide">
		<ol class="breadcrumb col fiveSixth tabletTwoThirds">
	 		<li><a href="#">Home</a></li>
	 		<li><a href="#">Second</a></li>
	 		<li class="active"> Third</li>
	 		<li><a href="#">Fourth</a></li>
		</ol>
		<div class="coding-bg col fourSixth">
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



    	</div>	
	</div>
</body>
</html>