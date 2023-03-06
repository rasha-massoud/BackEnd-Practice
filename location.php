<?php 
include("connection.php"); 
$ip = $_SERVER['REMOTE_ADDR'];

$response = array(
    "ip" => $ip
);

$ch = curl_init('http://ipwhois.app/json/' . $ip);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);
// Decode JSON response
$ipWhoIsResponse = json_decode($json, true);
// Country code output, field "country_code"
return $ipWhoIsResponse;

?>
