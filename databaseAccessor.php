<?php

$server = 'rerun.it.uts.edu.au';
$username = 'potiro';
$password = 'pcXZb(kL';
$database = 'poti';

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'php';

$link = mysqli_connect($server, $username, $password, $database);
if (!$link)
   die("Could not connect to Server");
 

$query_string = "select * from products";
$result = mysqli_query($link,$query_string);

$num_rows = mysqli_num_rows($result);
 
$options= "<option>List of the products</option>";
if ($num_rows > 0 ) {
    
    while ( $a_row = mysqli_fetch_assoc($result) ) {
        $options=$options."\n"."<option>".$a_row['product_name']."</option>";
    }
 mysqli_close($link);
   
}
 echo $options; 

?>

