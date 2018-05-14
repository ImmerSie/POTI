<?php
 
$server = 'rerun.it.uts.edu.au';
$username = 'potiro';
$password = 'pcXZb(kL';
$database = 'poti';

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'php';

$id = $_GET['id'];


$link = mysqli_connect($server, $username, $password, $database);
 if (!$link)
    die("Could not connect to Server");
  
 
$query_string = "select * from products where product_id = ".$id;
$result = mysqli_query($link,$query_string);
 
 $num_rows = mysqli_num_rows($result);
  
 $options = "";
 
 if ($num_rows > 0 ) {
     
    $a_row = mysqli_fetch_assoc($result);
    $options=$a_row['product_id'].",".$a_row['product_name'].",".$a_row['unit_price'].",".$a_row['unit_quantity'].",".$a_row['in_stock'];    
    mysqli_close($link);
    
 }
  echo $options; 
 
 ?>