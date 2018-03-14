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

body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}


h1:hover{
	text-decoration: none no-underline;
}


header{
	width: 220px;
	background: #009fd4;
}

input{
	width: 150px;
	padding: 10px;
	border-radius: 5px;
	border-top-style: none;
	border-left-style: none;
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
			<h2>Forms</h2>
		
			<p></p>
<div id="form" class="myform">

<form id="form1" id="form1" action="mail.php" method="POST">

    <label>Name
        <span class="small">Add your name</span>
    </label>
<input type="text" name="name">
    <label>Email
        <span class="small">Enter a Valid Email</span>
    </label>
<input type="text" name="email">
    <label>Phone
        <span class="small">Add a Phone Number</span>
    </label>
<input type="text" name="phone">

<br />
<br />

    <label>Website
        <span class="small">Your Website</span>
    </label>
 <input type="text" name="website">

    <label>Priority  
        <span class="small">Priority Level  </span>
    </label>

<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<br />
<br />
    <label>Type
        <span class="small">Type of Contact</span>
    </label>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br />
<br />
<br />


    <label>Message
        <span class="small">Type Your Message</span>
    </label>
<textarea name="message" rows="6" cols="25"></textarea><br />

    <button type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div> 
<!-- end of form class -->
		
	<div class="row mobileHide fourSixth pd-r">
		<div class="coding-bg col">
			<pre><code class="html">
&lt;div id=&quot;form&quot; class=&quot;myform&quot;&gt;

&lt;form id=&quot;form1&quot; id=&quot;form1&quot; action=&quot;mail.php&quot; method=&quot;POST&quot;&gt;

    &lt;label&gt;Name
        &lt;span class=&quot;small&quot;&gt;Add your name&lt;/span&gt;
    &lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;
    &lt;label&gt;Email
        &lt;span class=&quot;small&quot;&gt;Enter a Valid Email&lt;/span&gt;
    &lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;
    &lt;label&gt;Phone
        &lt;span class=&quot;small&quot;&gt;Add a Phone Number&lt;/span&gt;
    &lt;/label&gt;
&lt;input type=&quot;text&quot; name=&quot;phone&quot;&gt;

&lt;br /&gt;
&lt;br /&gt;

    &lt;label&gt;Website
        &lt;span class=&quot;small&quot;&gt;Your Website&lt;/span&gt;
    &lt;/label&gt;
 &lt;input type=&quot;text&quot; name=&quot;website&quot;&gt;

    &lt;label&gt;Priority  
        &lt;span class=&quot;small&quot;&gt;Priority Level  &lt;/span&gt;
    &lt;/label&gt;

&lt;select name=&quot;priority&quot; size=&quot;1&quot;&gt;
&lt;option value=&quot;Low&quot;&gt;Low&lt;/option&gt;
&lt;option value=&quot;Normal&quot;&gt;Normal&lt;/option&gt;
&lt;option value=&quot;High&quot;&gt;High&lt;/option&gt;
&lt;option value=&quot;Emergency&quot;&gt;Emergency&lt;/option&gt;
&lt;/select&gt;
&lt;br /&gt;
&lt;br /&gt;
&lt;br /&gt;
    &lt;label&gt;Type
        &lt;span class=&quot;small&quot;&gt;Type of Contact&lt;/span&gt;
    &lt;/label&gt;
&lt;select name=&quot;type&quot; size=&quot;1&quot;&gt;
&lt;option value=&quot;update&quot;&gt;Website Update&lt;/option&gt;
&lt;option value=&quot;change&quot;&gt;Information Change&lt;/option&gt;
&lt;option value=&quot;addition&quot;&gt;Information Addition&lt;/option&gt;
&lt;option value=&quot;new&quot;&gt;New Products&lt;/option&gt;
&lt;/select&gt;
&lt;br /&gt;
&lt;br /&gt;
&lt;br /&gt;

    &lt;label&gt;Message
        &lt;span class=&quot;small&quot;&gt;Type Your Message&lt;/span&gt;
    &lt;/label&gt;
&lt;textarea name=&quot;message&quot; rows=&quot;6&quot; cols=&quot;25&quot;&gt;&lt;/textarea&gt;&lt;br /&gt;

    &lt;button type=&quot;submit&quot; value=&quot;Send&quot; style=&quot;margin-top:15px;&quot;&gt;Submit&lt;/button&gt;
&lt;div class=&quot;spacer&quot;&gt;&lt;/div&gt;

&lt;/form&gt;
&lt;/div&gt; 
			</code></pre>
    	</div>
    </div>


	</div>
</body>
</html>