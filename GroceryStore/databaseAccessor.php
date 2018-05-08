<?php

$link = mysqli_connect('rerun.it.uts.edu.au', 'potiro', 'pcXZb(kL', 'poti');
if (!$link)
   die("Could not connect to Server");
 

$query_string = "select * from products";
$result = mysqli_query($link,$query_string);

$num_rows = mysqli_num_rows($result);
 
$options= "<option>List of the products</option>";
if ($num_rows > 0 ) {
    
    while ( $a_row = mysqli_fetch_assoc($result) ) {
        $options=$options."\n"."<option>".$a_row['title']."</option>";
    }
 mysqli_close($link);
   
}
 echo $options; 

?>

