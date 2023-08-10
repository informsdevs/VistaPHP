<?php

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Set custom headers
curl_setopt($ch, CURLOPT_HTTPHEADER, $newHeaders);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

$data = json_decode($response);

foreach ($data->collection as $customer) {
    echo "Name: " . $customer->name . " Email: " . $customer->email . "\n";
  }


?>