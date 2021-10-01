<?php
require_once 'vendor/autoload.php';

// $clientID = '1073514685340-v911e4m1shg59rke22qet4ts0del2hts.apps.googleusercontent.com';
// $clientSecret = 'bptMNHhNkDxSDHynqS5xBG6j';
// $redirectUrl = 'http://localhost/login/login.php';

$google_client = new Google_Client();

$google_client->setClientId('1073514685340-v911e4m1shg59rke22qet4ts0del2hts.apps.googleusercontent.com');

$google_client->setClientSecret('bptMNHhNkDxSDHynqS5xBG6j');

$google_client->setRedirectUri('http://localhost/login/login.php');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>

