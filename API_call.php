<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://document-parser-api.lateral.io/?url=https://www.lemonde.fr/les-decodeurs/article/2019/01/08/le-projet-de-loi-anti-casseurs-d-edouard-philippe-est-il-juridiquement-tenable_5406398_4355770.html",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "subscription-key: 55ab3caf64ff9f9edb153109aaaf0f87"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

$json = json_decode($response);

  echo $json->body;
}