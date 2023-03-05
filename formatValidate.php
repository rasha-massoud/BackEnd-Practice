<?php
include("connection.php"); 

$mail=$_POST['mail'];
$password=$_POST['password'];

if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $response["mail_status"]="The Email Format is Valid!";
}
else{
    $response["mail_status"]="Sorry! Invalid Email Format!";
}

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $response["password_status"]="Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
}else{
    $response["password_status"]="Strong password.";
}

echo json_encode($response);

?>