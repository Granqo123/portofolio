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
<div class="nav">
<nav>
<ul>
<li><a href="Granqo_projekt.html">HOME</a></li>
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
</header>
<div class="main">

  <?php

  


  $ft=file_get_contents("files/contactData.txt");
  $str_arr = explode("|", $ft);
  //print_r($str_arr);


  ?>

  	<h2 align="center" style="font-family:verdana;"> Here are your booking details: </h2> <br>

  	 <p align="center" style="font-family:verdana;" style="margin-top:20px;"><b>Name:</b> <i> <?php echo $str_arr[0];?></i>  </p>
  	<hr>
  	   <p align="center" style="font-family:verdana;"> <b>Last Name:</b> <i><?php echo $str_arr[1];?></i> </p>
  	<hr>
  	   <p align="center" style="font-family:verdana;"> <b>Email:</b><i>  <?php echo $str_arr[2];?> </i> </p>
  <hr>
  	 <p align="center" style="font-family:verdana;"> <b>Gender: </b> <i> <?php echo $str_arr[3];?> </i> </p>
  <hr>
  	  <p align="center" style="font-family:verdana;"><b>Comment: </b> <i> <?php echo $str_arr[4];?> </i> </p>
  <hr>
  	  <p align="center" style="font-family:verdana;"><b>Subject:</b> <i> <?php echo $str_arr[5];?> </i> </p>
  <hr>
  <hr>
  	  <p align="center" style="font-family:verdana;"><b>Price:</b> <i> <?php echo $str_arr[6];?> </i> </p>
  <hr>
  	<br>

</div>
<footer>


<p> All rights reserved to &copy;Granit Rozhaja,2020</p>

</footer>
<script src="javascript.js"></script>
</body>
</html>
