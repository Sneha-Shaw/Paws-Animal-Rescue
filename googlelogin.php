<?php
session_start();
    
    require 'config.php';
if(isset($_SESSION['access_token'])){
$client->setAccessToken($_SESSION['access_token']);
header('Location: index2.php');
}
elseif(isset($_GET['code']))
{
    $token= $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token']=$token;
    header('Location: index2.php');
}
else
{
    header('location:login.php');
    exit();
}
$gservice = new Google_Service_Oauth2($client);
$data = $gservice->userinfo->get();
?>