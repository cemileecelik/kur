<?php

//http://data.fixer.io/api/latest?access_key=c4be7cf440eb2996846d7edd7085dd62

$url = 'http://data.fixer.io/api/latest?access_key=c4be7cf440eb2996846d7edd7085dd62';

$endpoint = 'latest';
$access_key = 'c4be7cf440eb2996846d7edd7085dd62';
//sen parfüm ben esrar kokarım
// Initialize CURL:
$ch = curl_init('http://data.fixer.io/api/' . $endpoint . '?access_key=' . $access_key . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);

$xx =  $exchangeRates['rates']['TRY'];

$now = Date('Y-m-d H:i:s');



if (!isset($_POST['ekle'])) {
    $kur = array(
        'try_kur' => $exchangeRates['rates']['TRY'],
        'date' => $exchangeRates['date']
    );


    $insert = $db->prepare("INSERT INTO try SET
    try_kur=:try_kur,
    date=:date
    ");

    $kaydet = $insert->execute(array(
        'try_kur' => $kur['try_kur'],
        'date' => $kur['date']

    ));

    if ($kaydet) {
        header('Location:index.php?ekle=ok');
    }
}
