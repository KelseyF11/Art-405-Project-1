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
	<div class="container mobileHide">
		    <div class="row mobileHide">
      <h1 class="col tabletFull" style="padding-bottom: 20px;
  padding-top: 20px;">Cards</h1>     
    </div>

	<div class="mobileHide row">
     <div class="card-img" style="overflow: hidden;">
      <img src="images/jellyfish-2.jpg" height="420" width="800;" style=" margin-left:-30px; border-radius: 5px;" >
    </div>
    <div class="card-info">
      <div class="card-text">
        <h2 style="padding-bottom: 20px;">World of Jellyfish</h2>
        <p>	Jellyfish have drifted along on ocean currents for millions of years, even <br>before dinosaurs lived on the Earth. Despite their name, jellyfish aren't <br>actually fish— they're invertebrates...<br> or animals with no backbones.</p>
      </div>


      <div class="card-btn">
        <button type="button">Learn more</button>
      </div>
    </div>
	</div>
  <h3 class="m-text">HTML</h3>
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
<h3 class="m-text">CSS</h3>
<div class="row mobileHide fourSixth pd-r">
	<div class="coding-bg col">
		<pre><code class="css">
.card-img {
  float: left;
  height: 420px;
  width: 327px;
}

.card-img img {
  border-radius: 7px 0 0 7px;
}

.card-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.card-text {
  height: 300px;
  width: 327px;
}

.card-text h2 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.card-text h2,
.card-btn p {
  font-family: 'Bentham', serif;
}

.card-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.card-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.card-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.card-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}


.card-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  background-color: transparent;
  border-color: #01447e;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #01447e;
  cursor: pointer;
  outline: none;
}

.card-btn button:hover {
  background-color: #01447e;
  color: #ffffff;
}
		</code></pre>
    </div>
</div>


  </div>






  <!-- MOBILE -->


    <div class="container-mobile mobileShow">
        <div class="row mobileShow">
          <div class="col oneSixth tabletOneThird">
            <h2>Card</h2>
         </div>
        </div>
  <div class="mobileShow row">
     <div class="card-img" style="overflow: hidden;">
      <img src="images/jellyfish-2.jpg" height="420" width="800;" style=" margin-left:-30px; border-radius: 5px;" >
    </div>
    <div class="card-info">
      <div class="card-text">
        <h2 style="padding-bottom: 20px;">World of Jellyfish</h2>
        <p> Jellyfish have drifted along on ocean currents for millions of years, even <br>before dinosaurs lived on the Earth. Despite their name, jellyfish aren't <br>actually fish— they're invertebrates...<br> or animals with no backbones.</p>
      </div>


      <div class="card-btn">
        <button type="button">Learn more</button>
      </div>
    </div>
  </div>
  <div class="row mobileShow">
 
    <div class="row mobileShow fourSixth pd-r">
    <div class="coding-bg-sm col" style="min-width: 300px;">
       <h3 class="m-text">HTML</h3>
        <pre><code class="html">
&lt;div class=&quot;card-img&quot; style=&quot;overflow: hidden;&quot;&gt;
      &lt;img src=&quot;images/jellyfish-2.jpg&quot; height=&quot;420&quot; width=&quot;800;&quot; style=&quot; margin-left:-30px; border-radius: 5px;&quot; &gt;
&lt;/div&gt;
&lt;div class=&quot;card-info&quot;&gt;
    &lt;div class=&quot;card-text&quot;&gt;
        &lt;h1 style=&quot;padding-bottom: 20px;&quot;&gt;World of Jellyfish&lt;/h1&gt;
        &lt;p&gt; Jellyfish have drifted along on ocean currents for millions of years, even &lt;br&gt;before dinosaurs lived on the Earth. Despite their name, jellyfish aren't &lt;br&gt;actually fish&mdash; they're invertebrates...&lt;br&gt; or animals with no backbones.&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;card-btn&quot;&gt;
        &lt;button type=&quot;button&quot;&gt;Learn more&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;
        </code></pre>
        </div>
    </div>
  
<h3 class="m-text">CSS</h3>
<div class="row mobileShow fourSixth pd-r">
  <div class="coding-bg-sm col">
    <pre><code class="css">
.card-img {
  float: left;
  height: 420px;
  width: 327px;
}

.card-img img {
  border-radius: 7px 0 0 7px;
}

.card-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.card-text {
  height: 300px;
  width: 327px;
}

.card-text h2 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 34px;
  color: #474747;
}

.card-text h2,
.card-btn p {
  font-family: 'Bentham', serif;
}

.card-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.card-text p {
  height: 125px;
  margin: 0 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.card-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.card-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}


.card-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  background-color: transparent;
  border-color: #01447e;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #01447e;
  cursor: pointer;
  outline: none;
}

.card-btn button:hover {
  background-color: #01447e;
  color: #ffffff;
}
    </code></pre>
    </div>
</div>

</div>

    </div>

</body>
</html>