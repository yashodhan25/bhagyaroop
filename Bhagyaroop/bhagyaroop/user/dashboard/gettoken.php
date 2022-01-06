<?php

$c_url = curl_init();

$tokenurl = "https://api.prokerala.com/token";

$data = array(
    'grant_type' => 'client_credentials',
    'client_id' => '39e65d18-ddbf-4f80-bdaa-6ebc0f45062d',
    'client_secret' => 'mU06SLO8LduFI9kfS4p1B2MgVeq6Q1Au0DH3GGu4'
);

curl_setopt($c_url, CURLOPT_URL, $tokenurl);
curl_setopt($c_url, CURLOPT_POST, true);
curl_setopt($c_url, CURLOPT_POSTFIELDS, $data);
curl_setopt($c_url, CURLOPT_RETURNTRANSFER, true);

$token_data = curl_exec($c_url);
$json_token_data = json_decode($token_data, true);
$token = $json_token_data['access_token'];

?>