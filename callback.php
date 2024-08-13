<?php
require_once 'vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setClientId('YOUR_CLIENT_ID');
$client->setClientSecret('YOUR_CLIENT_SECRET');
$client->setRedirectUri('http://yourdomain.com/callback.php');

$code = $_GET['code'];
$accessToken = $client->fetchAccessTokenWithAuthCode($code);
$client->setAccessToken($accessToken);

$oauth = new Google_Service_Oauth2($client);
$userInfo = $oauth->userinfo->get();

$_SESSION['user'] = $userInfo;
header('Location: quiz.php');
exit();
