<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Granqo's Otaku Store</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href="css/style_final.css" rel="stylesheet" type="text/css" />
</head>
 <body>
   <header>
   <h1>Granqo's Otaku Store
   <div class="logo">
   <a href="index.html"><img src="images/logo.png" width="70" hegiht="65" alt="logo"/></a>
   </div>
   </h1>
   </header>
   <div class="main">
   <div class="nav">
   <nav>
   <ul>

     <li><a href="Granqo_Projekt.html">HOME</a></li>
     <li><a href="login.php">LOG IN</a></li>
     <li><a href="anime.html">ANIME</a></li>
     <li><a href="manga.html">MANGA</a></li>
     <li><a href="toys.php">TOYS</a></li>
     <li><a href="games.html">GAMES</a></li>
     <li><a href="clothing.html">CLOTHING</a></li>
     <li><a href="index.php">SEARCH</a></li>
     <li><a href="contact.html">CONTACT INFO</a></li>
     <li><a href="location.html">LOCATION</a></li>
   </ul>
   </nav>
   </div>
  <div>
   <br />
   <h2>Here you can see what our Customers have booked for their trips</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
 </div>
</div>
 </body>
 <footer>


 <p> All rights reserved to &copy;Granit Rozhaja,2020</p>

 </footer>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
