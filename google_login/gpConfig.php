<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';
/*
 * Configuration and setup Google API
 */
$clientId = '355908212726-51nkbkr1cuk74nh7uu78u0o5obq4cvq8.apps.googleusercontent.com';
$clientSecret = 'XYWctGfGrmy7cLX1c4oj4Ybt';
$redirectURL = 'http://www.bananastory2u.com/callback.php';


//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to bananastory2u.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);

?>