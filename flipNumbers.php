<?php 
include("connection.php"); 

$flipNumber=$_POST["flipNumber"];

$result = "";
$numStr = "";

for ($i = 0; $i < strlen($flipNumber); $i++) {
    $char = $flipNumber[$i];
    if (is_numeric($char)) {
        $numStr .= $char;
    }
    else {
        $result .= strrev($numStr);
        $result .= $char;
        $numStr = "";
    }
}

if (strlen($numStr) > 0) {
    $result .= strrev($numStr);
}
$response["status"]=$result;


echo json_encode($response);

?>


