<?php

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}


?>


<html>
<head>
<title>Granqo's Otaku Store</title>
<link href="css/style_main.css" rel="stylesheet" type="text/css" />



</head>

<body>
<header>
<h1>Granqo's Otaku Store
<div class="logo">
<a href="Granqo_Projekt.html"><img src="images/logo6.png" width="70" hegiht="65" alt="logo"/></a>
</div>
</h1>
</header>
<main>
<div class="nav">
<nav>
<ul>
<li><a href="Granqo_Projekt.html">HOME</a></li>
<li><a href="about.html">ABOUT US</a></li>
<li><a href="anime.html">ANIME</a></li>
<li><a href="manga.html">MANGA</a></li>
<li><a href="toys.html">TOYS</a></li>
<li><a href="games.html">GAMES</a></li>
<li><a href="clothing.html">CLOTHING</a></li>
<li><a href="FAQ.html">FAQ</a></li>
<li><a href="contact.html">CONTACT INFO</a></li>
<li><a href="location.html">LOCATION</a></li>
</ul>
</nav>
</div>

<div class="welcome">

<a href="logout.php">LOGOUT</a>

<h1> Welcome <?php echo $_SESSION['username'] ; ?></h1>


</div>
</main>

<footer>


<p> All rights reserved to &copy;Granit Rozhaja,2020</p>

</footer>

</body>


</html>
