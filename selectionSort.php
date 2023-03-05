<?php 
header('Access-Control-Allow-Origin: *');
include("connection.php"); 

$strOfNumbers=isset($_GET['strOfNumbers']);
// $strOfNumbers="3,6,43,24,6,58";
$Array=explode(",", $strOfNumbers);
$n=count($Array);
for($i=0; $i<$n; $i++) {
    $min_idx = $i;

    for($j=$i+1; $j<$n; $j++) {
      if((int)$Array[$j] < (int)$Array[$min_idx])
      {$min_idx = $j;}
    }

    $temp = (int)$Array[$min_idx];
    $Array[$min_idx] = (int)$Array[$i];
    $Array[$i] = (int)$temp;
    $response["sortedAray"]=$Array;
}

echo json_encode($response);

?>