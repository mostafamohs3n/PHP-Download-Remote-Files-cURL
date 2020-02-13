<?php
// Error logging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Override PHP memory limits
ini_set('memory_limit', '-1');

$destinationFileName = "fileName.zip";
$source = "www.remotefile.com/archive.zip";


$destination = __DIR__ . "/". $destinationFileName;
$file = fopen($destination, "w+");


// cURL file URL and save the output in a file using CURLOPT_FILE
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $source);
curl_setopt($ch, CURLOPT_FILE, $file);
$data = curl_exec ($ch);
curl_close ($ch);
unset($ch);

