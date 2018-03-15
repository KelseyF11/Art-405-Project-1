<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<header class="bg-blue row mobileHide sticky">
		<h1><a href="index.php">Public Code</a></h1>
			<div>
				<ul class="navlist">
          <li class="navlist-item"><a class="navlist-link" href="alerts.php">Alerts</a></li>
					<li class="navlist-item"><a class="navlist-link" href="alerts.php">Alerts</a></li>
					<li class="navlist-item"><a class="navlist-link" href="badges.php">Badges</a></li>
					<li class="navlist-item"><a class="navlist-link" href="breadcrumbs.php">Breadcrumbs</a></li>
					<li class="navlist-item"><a class="navlist-link" href="buttons.php">Buttons</a></li>
					<li class="navlist-item"><a class="navlist-link" href="cards.php">Cards</a></li>
					<li class="navlist-item"><a class="navlist-link" href="footer.php">Footers</a></li>
					<li class="navlist-item"><a class="navlist-link" href="forms.php">Forms</a></li>
					<li class="navlist-item"><a class="navlist-link" href="global-navigation.php">Global Navigation</a></li>
					<li class="navlist-item"><a class="navlist-link" href="hero-units.php">Hero Units</a></li>
					<li class="navlist-item"><a class="navlist-link" href="lists.php">Lists</a></li>
					<li class="navlist-item"><a class="navlist-link" href="media-objects.php">Media Objects</a></li>
					<li class="navlist-item"><a class="navlist-link" href="navigation-lists.php">Navigation Lists</a></li>
					<li class="navlist-item"><a class="navlist-link" href="pagination.php">Pagination</a></li>
					<li class="navlist-item"><a class="navlist-link" href="tables.php">Tables</a></li>
           <li class="navlist-item"><a class="navlist-link" src=""><i class="fab fa-github" style="color: white"></i>My GitHub</a></li>
				</ul>
			</div>
</header>

<!-- 		<nav class="row mobileShow">
			<div class="col">
				HAMBURGER ICON
			</div>
		</nav> -->
<div class="row mobileShow">
	
</div>

<div class="header-main-mobile mobileShow">
	<h5 style="padding: 0px auto; font-size: 15px;">Public Code<h5>
</div>

<div class="row mobileShow">
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">☰</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="alerts.php">Alerts</a>
      <a href="badges.php">Badges</a>
      <a href="breadcrumbs.php">Breadcrumbs</a>
      <a href="buttons.php">Buttons</a>
      <a href="cards.php">Cards</a>
      <a href="footer.php">Footers</a>
      <a href="forms.php">Forms</a>
      <a href="global-navigation.php">Global Navigation</a>
      <a href="hero-units.php">Hero Units</a>
      <a href="lists.php">Lists</a>
      <a href="media-objects.php">Media Objects</a>
      <a href="navigation-lists.php">Navigation Lists</a>
      <a href="pagination.php">Pagination</a>
      <a href="tables.php">Tables</a>
       <a src=""><i class="fab fa-github" style="color: white"></i>My GitHub</a>
    </div>
  </div>
</div>




<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
