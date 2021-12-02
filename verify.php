<?php
require_once "config.php";
require_once "Phone.php";
$phone_number = $_GET['phone_number'];
$url ="http://apilayer.net/api/validate?access_key=6de0cb69cb5d89ccd52b2535e5ebf8bb&number=$phone_number";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$json = json_decode($response);

if($json->valid == false){
    $phone_obj = new Phone($json->valid ,$json->number,null,null,null,null,null,null,null,null);
    $phone_obj->save();
    $_SESSION['failed'] = "Your Phone Number Is Not Valid";
}else {
$phone_obj = new Phone($json->valid ,$json->number,$json->local_format,$json->international_format,$json->country_prefix,$json->country_code,$json->country_name,$json->location,$json->carrier,$json->line_type);
$phone_obj->save();
    $_SESSION['success'] = "Your Phone Number Is Valid !";
}
curl_close($curl);
header('Location: '.$_SERVER['PHP_SELF']);
die;