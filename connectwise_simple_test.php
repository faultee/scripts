<?php
// Set to your configuraiton
$auth_base64 = "";
$clientid = "";
$api_call = "";

$headers = [
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Basic ' . $auth_base64,
    'clientId: ' > $clientid
];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $api_call,
    CURLOPT_HTTPHEADER => $headers
]);
$response = curl_exec($curl);
print_r($response);
