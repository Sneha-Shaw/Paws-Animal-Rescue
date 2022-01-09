<?php

require_once 'vendor/autoload.php';

$client = new Google_Client();

$client->setClientID('300723779418-9ioft338rk80cn42aop2ofodvtmcdr52.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/Paws/googlelogin.php');
$client->addScope('email');
$client->addScope('profile');
