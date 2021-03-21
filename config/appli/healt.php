<?php
require 'vendor/autoload.php';

ini_set('display_errors', 1);


use Appwrite\Client;
$apikey = "f6d5fd7aa8359c9ec0e20ad543f813ce51dbc3dff52680fd9e584a66ec607ef147c686ddd5e38b009cac79d1ac2e84cab84f0044174fcb7b88d33cd7d7d19808fa0dd02ba8e600246104724a293017d41819974364726701c53b926bffab66599c1edbcb2d241d89c73f266ab83d60984849c414f795703d5d5caa0a745f4ed9";
$projectid = "605605fe74763";
$client = new Client();

$client
    ->setEndpoint('https://localhost/v1') // Your API Endpoint
    ->setProject($projectid) // Your project ID
    ->setKey($apikey) // Your secret API key
;