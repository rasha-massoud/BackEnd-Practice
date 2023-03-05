<?php 
include("connection.php"); 
header("Content-Type: application/json");
$ip = $_SERVER['REMOTE_ADDR'];

$response = array(
    "ip" => $ip
);

echo json_encode($response);

?>




