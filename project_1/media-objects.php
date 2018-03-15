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

.icons{
padding: 10px;
text-align: right;
color: grey;
margin-top: -15px;
padding-right: 15px;
}

h3{
color: #009fd4;
}

h4{
color: gray;
margin-top: -12px;
}

h5{
	color: #3455db;
	margin-left: 55px;
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
	padding-top: 20px; margin-top: 50px;">Media Object</h1>			
		</div>


    <div class="media-object-bg" style="flex-wrap: wrap; ">
    	<img class="img" src="images/mary-williams.png" style="height: 64px; width: 64px; overflow: hidden;">
	    <div class="mo-txt">
		    	<h3>Mary Williams</h3>
		    	<h4>@mary_i_am</h4>
		    	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	    	<div class="icons">
		    	<i class="far fa-heart" style="padding-right: 10px;"></i>
		    	<i class="fas fa-comment" style="padding-right: 10px;"></i>
		    	<i class="fas fa-retweet" style="padding-right: 10px;"></i>
	    	</div>
		    <div class="mo-2">
			    	<img src="images/mary-williams.png" style="height: 44px; width: 44px; overflow: hidden; margin-top: 20px;">
			    <div class="mo-comment">
			    	<h5>@mary_i_am</h5>
			    	<p>Necessitatibus vel quasi aspernatur libero obcaecati nisi at aliquid temporibus molestiae voluptatem possimus, perspiciatis, error itaque quod ex quos dolores, a sunt?</p>
			    </div>
			</div>
	    </div>
    </div>

			<h3 class="m-text">HTML</h3>
    	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;media-object-bg&quot;&gt;
    &lt;img src=&quot;images/mary-williams.png&quot; style=&quot;height: 64px; width: 64px; overflow: hidden;&quot;&gt;
	&lt;div class=&quot;mo-txt&quot;&gt;
		    &lt;h3&gt;Mary Williams&lt;/h3&gt;
		    &lt;h4&gt;@mary_i_am&lt;/h4&gt;
		    &lt;p&gt;	Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
	&lt;div class=&quot;icons&quot;&gt;
		  &lt;i class=&quot;far fa-heart&quot; style=&quot;padding-right: 10px;&quot;&gt;&lt;/i&gt;
		  &lt;i class=&quot;fas fa-comment&quot; style=&quot;padding-right: 10px;&quot;&gt;&lt;/i&gt;
		  &lt;i class=&quot;fas fa-retweet&quot; style=&quot;padding-right: 10px;&quot;&gt;&lt;/i&gt;
	 &lt;/div&gt;
	 &lt;div class=&quot;mo-2&quot;&gt;
			    	
	&lt;img class=&quot;img&quot; src=&quot;images/mary-williams.png&quot; style=
	&quot;height: 44px; width: 44px; overflow: hidden; margin-top: 20px;&quot;&gt;
			    
	&lt;div class=&quot;mo-comment&quot;&gt;
			    	
	&lt;h5&gt;@mary_i_am&lt;/h5&gt;
			    	
	&lt;p&gt;Necessitatibus vel quasi aspernatur libero obcaecati nisi at aliquid temporibus molestiae voluptatem possimus, perspiciatis, error itaque quod ex quos dolores, a sunt?&lt;/p&gt;    
	&lt;/div&gt;
	&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
			  </code></pre>
    	</div>
    </div>

		<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
    <div class="coding-bg col">
        <pre><code class="css">
h3{
color: #009fd4;
}

h4{
color: gray;
margin-top: -12px;
}

h5{
	color: #3455db;
	margin-left: 55px;
}

.icons{
padding: 10px;
text-align: right;
color: grey;
margin-top: -15px;
padding-right: 15px;
}

.media-object-bg {

  background-color: #ffffff;
  width: 500px;
  height: auto;
  margin-left: 160px;
  margin-right: 5px;
  padding: 10px;
  margin-top: 20px;
  padding-top: 25px;
  margin-bottom: 20px;
  border-radius: 5px;
  box-shadow: 2px 1px 2px  #ddd;
}

.mo-comment{
	margin-top: -40px;
}

.mo-txt{
margin-left: 90px;
margin-top: -100px;
}

.mo-2{
background-color: #edf3ff;
padding-right: 20px;
padding-left: 20px;	
padding-bottom: 15px;
border-radius: 3px;
}
        </code></pre>
    </div>
</div>


	</div>



  <!-- MOBILE -->


    <div class="container-mobile mobileShow">
        <div class="row mobileShow">
          <div class="col oneSixth tabletOneThird">
            <h2>Media Object</h2>
         </div>
        </div>
    <div class="media-object-bg-sm" style="flex-wrap: wrap;">
    	<img class="img" src="images/mary-williams.png" style="height: 64px; width: 64px; overflow: hidden;">
	    <div class="mo-txt">
		    	<h3>Mary Williams</h3>
		    	<h4>@mary_i_am</h4>
		    	<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	    	<div class="icons">
		    	<i class="far fa-heart" style="padding-right: 10px;"></i>
		    	<i class="fas fa-comment" style="padding-right: 10px;"></i>
		    	<i class="fas fa-retweet" style="padding-right: 10px;"></i>
	    	</div>
		    <div class="mo-2">
			    	<img src="images/mary-williams.png" style="height: 44px; width: 44px; overflow: hidden; margin-top: 20px;">
			    <div class="mo-comment">
			    	<h5>@mary_i_am</h5>
			    	<p>Necessitatibus vel quasi aspernatur libero obcaecati nisi at aliquid temporibus molestiae voluptatem possimus, perspiciatis, error itaque quod ex quos dolores, a sunt?</p>
			    </div>
			</div>
	    </div>
    </div>

			<h3 class="m-text">HTML</h3>
    	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col" style="height: 300px;">
			  <pre><code class="html">
&lt;div class=&quot;media-object-bg&quot;&gt;
    &lt;img src=&quot;images/mary-williams.png&quot; style=&quot;height: 64px; width: 64px; overflow: hidden;&quot;&gt;
	&lt;div class=&quot;mo-txt&quot;&gt;
		    &lt;h3&gt;Mary Williams&lt;/h3&gt;
		    &lt;h4&gt;@mary_i_am&lt;/h4&gt;
		    &lt;p&gt;	Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
	&lt;div class=&quot;icons&quot;&gt;
		  &lt;i class=&quot;far fa-heart&quot; style=&quot;padding-right: 10px;&quot;&gt;&lt;/i&gt;
		  &lt;i class=&quot;fas fa-comment&quot; style=&quot;padding-right: 10px;&quot;&gt;&lt;/i&gt;
		  &lt;i class=&quot;fas fa-retweet&quot; style=&quot;padding-right: 10px;&quot;&gt;&lt;/i&gt;
	 &lt;/div&gt;
	 &lt;div class=&quot;mo-2&quot;&gt;
			    	
	&lt;img class=&quot;img&quot; src=&quot;images/mary-williams.png&quot; style=
	&quot;height: 44px; width: 44px; overflow: hidden; margin-top: 20px;&quot;&gt;
			    
	&lt;div class=&quot;mo-comment&quot;&gt;
			    	
	&lt;h5&gt;@mary_i_am&lt;/h5&gt;
			    	
	&lt;p&gt;Necessitatibus vel quasi aspernatur libero obcaecati nisi at aliquid temporibus molestiae voluptatem possimus, perspiciatis, error itaque quod ex quos dolores, a sunt?&lt;/p&gt;    
	&lt;/div&gt;
	&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;
			  </code></pre>
    	</div>
    </div>

		<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col" style="height: 300px;">
        <pre><code class="css">
h3{
color: #009fd4;
}

h4{
color: gray;
margin-top: -12px;
}

h5{
	color: #3455db;
	margin-left: 55px;
}

.icons{
padding: 10px;
text-align: right;
color: grey;
margin-top: -15px;
padding-right: 15px;
}

.media-object-bg {

  background-color: #ffffff;
  width: 500px;
  height: auto;
  margin-left: 160px;
  margin-right: 5px;
  padding: 10px;
  margin-top: 20px;
  padding-top: 25px;
  margin-bottom: 20px;
  border-radius: 5px;
  box-shadow: 2px 1px 2px  #ddd;
}

.mo-comment{
	margin-top: -40px;
}

.mo-txt{
margin-left: 90px;
margin-top: -100px;
}

.mo-2{
background-color: #edf3ff;
padding-right: 20px;
padding-left: 20px;	
padding-bottom: 15px;
border-radius: 3px;
}
        </code></pre>
    </div>
</div>

    </div>


</body>
</html>