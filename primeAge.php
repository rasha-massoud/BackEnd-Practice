<?php 
include("connection.php"); 

$year=$_POST["year"];

$year =2023- $year;
if ( $year<0){
    $response["status"]="Invalid year!";
}
else if($year==1 || $year==2){
    $response["status"]="Prime!";
}
else{
    $response["status"]="Prime!";
    for ($i=2; $i< ($year/2); $i++){
        if($year%$i==0){
            $response["status"]="Not Prime!";
            break;
        }
    } 
}

echo json_encode($response);

?>