<?php 
include("connection.php"); 

$strPalindrome=$_GET["strPalindrome"];

$reverse = strrev($strPalindrome);  
    
if($strPalindrome == $reverse){  
    $response["status"]="Palindrome";
}
else{  
    $response["status"]=" Not Palindrome";
}  

echo json_encode($response);

?>