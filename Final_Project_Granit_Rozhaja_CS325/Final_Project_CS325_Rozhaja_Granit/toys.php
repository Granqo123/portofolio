<?php
session_start();
$database_name="tbl_product";
$con = mysqli_connect("localhost","root","root",$database_name);

if (isset($_POST["add"])){
       if (isset($_SESSION["cart"])){
           $item_array_id = array_column($_SESSION["cart"],"product_id");
           if (!in_array($_GET["id"],$item_array_id)){
               $count = count($_SESSION["cart"]);
               $item_array = array(
                   'product_id' => $_GET["id"],
                   'item_name' => $_POST["hidden_name"],
                   'product_price' => $_POST["hidden_price"],
                   'item_quantity' => $_POST["quantity"],
               );
               $_SESSION["cart"][$count] = $item_array;
               echo '<script>window.location="toys.php"</script>';
           }else{
               echo '<script>alert("Product is already Added to Cart")</script>';
               echo '<script>window.location="toys.php"</script>';
           }
       }else{
           $item_array = array(
               'product_id' => $_GET["id"],
               'item_name' => $_POST["hidden_name"],
               'product_price' => $_POST["hidden_price"],
               'item_quantity' => $_POST["quantity"],
           );
           $_SESSION["cart"][0] = $item_array;
       }
   }

   if (isset($_GET["action"])){
       if ($_GET["action"] == "delete"){
           foreach ($_SESSION["cart"] as $keys => $value){
               if ($value["product_id"] == $_GET["id"]){
                   unset($_SESSION["cart"][$keys]);
                   echo '<script>alert("Product has been Removed...!")</script>';
                   echo '<script>window.location="toys.php"</script>';

               }
           }
       }
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
<h2 style="color:#663d00;" >Here you can see a couple of our customers roaming around the magnificent toys of Granqo's Otaku Store</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/KUFj6Zscrv8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



<?php
$query="SELECT * FROM tbl_product ORDER BY id ASC" ;
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){




 ?>

<div class="cart">
<form method="post" action="toys.php?action=add&id=<?php echo $row["id"]?>">
<div class="flex-container3">

<div>
  <h3><?php echo $row["name"]?></h3>
<img src="<?php echo $row["image"]?>">
<p><?php echo $row["description"]?> </p>
<h2><?php echo $row["price"]?>"$"</h2>
<input type="text" name="quantity" value="1">
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]?>">
<input type="submit" name="add" style="margin-top:5px" value="Add to Cart">
</div>


</form>
</div>
<?php
 }
}
 ?>


<h2>Cart Details<h2>
  <div class="table">
    <table>
   <tr>
<th width="30%">Product Name</th>
<th width="10%">Quantity</th>
<th width="13%">Price Details</th>
<th width="10%">Total Price</th>
<th width="17%">Remove Item</th>
</tr>
<?php
if(!empty($_SESSION["cart"])){
  $total = 0;
  foreach ($_SESSION["cart"] as $key => $value){

 ?>
 <tr>
<td><?php echo $value["item_name"]; ?></td>
<td><?php echo $value["item_quantity"]; ?></td>
<td><?php echo $value["product_price"]; ?></td>
<td><?php echo number_format($value["item_quantity"] * $value["product_price"], 2 );?></td>
<td><a href="toys.php?action=delete&id=<?php echo $value["product_id"]; ?>">Remove Item</a></td>

 </tr>
 <?php
$total = $total + ($value["item_quantity"]* $value["product_price"]);
}
 ?>



 <tr>
  <td colspan="3" align="right">Total</td>
<th align="right">$ <?php echo number_format($total, 2); ?></th>
<td></td>
</tr>
    <?php
          }

?>

</table>
  </div>













</main>

<footer>


<p> All rights reserved to &copy;Granit Rozhaja,2020</p>

</footer>

</body>
</html>
