#!/usr/bin/php -q
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', '1');
require_once "/var/lib/asterisk/agi-bin/phpagi/phpagi.php";

$id = $argv[1];
// date_default_timezone_set('America/Bogota');


$post_data = array(
    'id' => $id
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://vicidial-public.mysoul.software/api/v2/call/get/11aa691a-5eb5-6082-3fda-b4f82b54e872',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Cookie: laravel_session=D7rNbt6wx706c6nNg02XPUIypRvj9SHpvkmgVRoY'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>