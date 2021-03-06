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
		<div class="container mobileHide pd-r">
		<div class="row mobileHide">
			<h1 class="col tabletTwoThirds" style="padding-bottom: 20px;
	padding-top: 20px; margin-top: 50px;">Pagination</h1>			
		</div>
			
			
	<h2>Pagination</h2>
		<div class="pagination">
			  <a href="#">&laquo;</a>
			  <a href="#">1</a>
			  <a href="#" class="active">2</a>
			  <a href="#">3</a>
			  <a href="#">4</a>
			  <a href="#">5</a>
			  <a href="#">6</a>
 			 <a href="#">&raquo;</a>
		</div>

				<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;pagination&quot;&gt;
	&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
	&lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;2&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
        &lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
 	&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
   		</div>
   	</div>

   			<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
    <div class="coding-bg col">
        <pre><code class="css">
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

.pagination a.active {
    background-color: #0275d8;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

		</code></pre>
	</div>
</div>









	<h2>Pagination with Rounded Borders</h2>

		<div class="pagination-2">
		  <a href="#">&laquo;</a>
		  <a href="#">1</a>
		  <a class="active" href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">4</a>
		  <a href="#">5</a>
		  <a href="#">6</a>
		  <a href="#">&raquo;</a>
		</div>

			
			<h3 class="m-text">HTML</h3>
			<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			<pre><code class="html">
&lt;div class=&quot;pagination-2&quot;&gt;
		&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
		&lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
   		</div>
   	</div>

			<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
    <div class="coding-bg col">
        <pre><code class="css">
.pagination-2 {
    display: inline-block;
}

.pagination-2 a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid #ddd;
}

.pagination-2 a.active {
    background-color: #0275d8;
    color: white;
    border: 1px solid #0275d8;
}

.pagination-2 a:hover:not(.active) {background-color: #ddd;}

.pagination-2 a:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination-2 a:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
		</code></pre>
	</div>
</div>



	<h2>Pagination with Margins</h2>

	<div class="pagination-3">
	  <a href="#">&laquo;</a>
	  <a href="#">1</a>
	  <a href="#" class="active">2</a>
	  <a href="#">3</a>
	  <a href="#">4</a>
	  <a href="#">5</a>
	  <a href="#">6</a>
	  <a href="#">&raquo;</a>
	</div>


			<h3 class="m-text">HTML</h3>
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			  <pre><code class="html">
&lt;div class=&quot;pagination-3&quot;&gt;
	 &lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
	 &lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;2&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
   		</div>
   	</div>


			<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
    <div class="coding-bg col">
        <pre><code class="css">
.pagination-3 {
    display: inline-block;
}

.pagination-3 a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.pagination-3 a.active {
    background-color: #0275d8;
    color: white;
    border: 1px solid #0275d8;
}

.pagination-3 a:hover:not(.active) {background-color: #ddd;}

		</code></pre>
	</div>
</div>

</div>






<!-- MOBILE -->

    <div class="container-mobile mobileShow">
        <div class="row mobileShow">
          <div class="col oneSixth tabletOneThird">

         </div>
        </div>	
	<h2>Pagination</h2>
		<div class="pagination">
			  <a href="#">&laquo;</a>
			  <a href="#">1</a>
			  <a href="#" class="active">2</a>
			  <a href="#">3</a>
			  <a href="#">4</a>
			  <a href="#">5</a>
			  <a href="#">6</a>
 			 <a href="#">&raquo;</a>
		</div>

				<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;div class=&quot;pagination&quot;&gt;
	&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
	&lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;2&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
        &lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
	&lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
 	&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
   		</div>
   	</div>

   			<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col">
        <pre><code class="css">
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

.pagination a.active {
    background-color: #0275d8;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

		</code></pre>
	</div>
</div>



	<h2>Pagination with Rounded Borders</h2>

		<div class="pagination-2">
		  <a href="#">&laquo;</a>
		  <a href="#">1</a>
		  <a class="active" href="#">2</a>
		  <a href="#">3</a>
		  <a href="#">4</a>
		  <a href="#">5</a>
		  <a href="#">6</a>
		  <a href="#">&raquo;</a>
		</div>

			
			<h3 class="m-text">HTML</h3>
			<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			<pre><code class="html">
&lt;div class=&quot;pagination-2&quot;&gt;
		&lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
		&lt;a class=&quot;active&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
		&lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
   		</div>
   	</div>

			<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col">
        <pre><code class="css">
.pagination-2 {
    display: inline-block;
}

.pagination-2 a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    border: 1px solid #ddd;
}

.pagination-2 a.active {
    background-color: #0275d8;
    color: white;
    border: 1px solid #0275d8;
}

.pagination-2 a:hover:not(.active) {background-color: #ddd;}

.pagination-2 a:first-child {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.pagination-2 a:last-child {
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}
		</code></pre>
	</div>
</div>



	<h2>Pagination with Margins</h2>

	<div class="pagination-3">
	  <a href="#">&laquo;</a>
	  <a href="#">1</a>
	  <a href="#" class="active">2</a>
	  <a href="#">3</a>
	  <a href="#">4</a>
	  <a href="#">5</a>
	  <a href="#">6</a>
	  <a href="#">&raquo;</a>
	</div>


			<h3 class="m-text">HTML</h3>
	<div class="row mobileShow fourSixth pd-r">
		<div class="coding-bg-sm col">
			  <pre><code class="html">
&lt;div class=&quot;pagination-3&quot;&gt;
	 &lt;a href=&quot;#&quot;&gt;&amp;laquo;&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;1&lt;/a&gt;
	 &lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;2&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;3&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;4&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;5&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;6&lt;/a&gt;
	 &lt;a href=&quot;#&quot;&gt;&amp;raquo;&lt;/a&gt;
&lt;/div&gt;
			</code></pre>
   		</div>
   	</div>


			<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col">
        <pre><code class="css">
.pagination-3 {
    display: inline-block;
}

.pagination-3 a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.pagination-3 a.active {
    background-color: #0275d8;
    color: white;
    border: 1px solid #0275d8;
}

.pagination-3 a:hover:not(.active) {background-color: #ddd;}

		</code></pre>
	</div>
</div>



    </div>
</body>
</html>