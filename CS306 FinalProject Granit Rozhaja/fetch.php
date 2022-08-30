<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "root", "booking");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM book
  WHERE fname LIKE '%".$search."%'
  OR lname LIKE '%".$search."%'
  OR email LIKE '%".$search."%'
  OR trip LIKE '%".$search."%'
  OR comment LIKE '%".$search."%'
  OR animal LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM book ORDER BY fname
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>First Name</th>
     <th>Last name</th>
     <th>Email</th>
     <th>Trip</th>
     <th>Comment</th>
     <th>Animal</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["fname"].'</td>
    <td>'.$row["lname"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["trip"].'</td>
    <td>'.$row["comment"].'</td>
    <td>'.$row["animal"].'</td>

   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
