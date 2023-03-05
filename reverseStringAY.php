<?php 
include("connection.php"); 

$originalStr=$_POST["reverseStrAY"];

$reverseStrAY= strrev($originalStr);
$reverseStrAY.="ay";

$response["status"]=$reverseStrAY;

echo json_encode($response);

?>


