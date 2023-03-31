<?php
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phonenumber"];
$text = $_POST ["text"];

if($text == ""){
    // this is the first request start with CON
$response = "CON what would you want to check \n";
$response = "1. My Account No. \n";
$response = "2. My Phone Number";
}else if ($text == "1"){
    //Business logic for the first level response 
    $response = "CON Choose the account information you want to view \n ";
    $response = "1. Account Number \n";
    $response = "2. Account Balance";
}else if ($text=="2"){
    //Business logic for the first level response
    //terminal request
    $response = "END Your Phone number is ".$phoneNumber;
}else if($text == "1*1"){
    //second level business reponse
    $accountNumber = "ACC0009";

    //end of terminal request
    $response = "END Your account number is ".$accountNumber;
}else if ($text == "1*2") {
    // second level response
    $balance = "ZMK 200";

    $response = "END Your balance is ".$balance;
}

header('content-type; text/plain');
echo $response;

?>