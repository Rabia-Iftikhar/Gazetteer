<?php

$ch = curl_init('https://api.exchangerate.host/latest?base=EUR');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
curl_close($ch);

$exchangeRates = json_decode($json, true);

echo json_encode($exchangeRates);
