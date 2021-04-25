<?php


include 'baglan.php';

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

echo "<h1>" . $exchangeRates['rates']['TRY'] . "</h1>";

$now = Date('Y-m-d H:i:s');
echo $now;

foreach ($exchangeRates as $key => $value) {
    $kur[$key] = array(
        'try_kur' => $exchangeRates['rates']['TRY'],
        'date' => $exchangeRates['date']
    );

    $insert = $db->prepare("INSERT INTO swap SET
    try_kur=:try_kur,
    date=:date
    ");

    $kaydet = $insert -> execute(array(
        'try_kur' => $kur[$key]['try_kur'],
        'date' => $kur[$key]['date']
        
    ));
    var_dump($kaydet);
exit;
}
// Access the exchange rate values, e.g. GBP:


$dataPoints = array(
    array("y" => 25, "label" => "Sunday"),
    array("y" => 15, "label" => "Monday"),
    array("y" => 25, "label" => "Tuesday"),
    array("y" => 5, "label" => "Wednesday"),
    array("y" => 10, "label" => "Thursday"),
    array("y" => 0, "label" => "Friday"),
    array("y" => 20, "label" => "Saturday")
);

?>
<!DOCTYPE HTML>
<html>

<head>

<button type="button" class="btn btn-primary">Primary</button>
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Push-ups Over a Week"
                },
                axisY: {
                    title: "Number of Push-ups"
                },
                data: [{
                    type: "line",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>


*/

kullanıcıya bi buton koy görünütlesin. 
Buton her çalıştığında o anın tarihi ile birlikte kur değerini database'e kaydetsin.
knk şimdi tarih marih seçeneği yok benim anladığım.
evet yok sen yapacaksın HDJKSGDHG NASIL KARDESİMdjfklsdjflk
jfhsdj he anlıyorum tamam galiba pdo çakıyım bi sonra kaydedeyim 
daha önceki kayıtları da tablo olarak göster hep ana ekranda
zor bi şey olabilir biraz ama uğraşırsan yapabilirsin bence
aldığın verileri bi tane grafikte** göster
Hadi bakayım kggggggg sagol canım jdsufgs
/*
//bi dk bakayım
//aslında bunlara mark atmıyoruz bu şekilde. o yüzden çok önemli değil
//gemisini falan yazdırıyoruz tarihini yazdırrıyoruz
//sadece bazı şeyler görüünce kontrol ediyoruz üst taraftan okuduğumuz bilgilerle karşılaştırmak için
//bi üstteki tabloda hani POL TS POD hepsi oluyor ya
//asıl orada bastırıyoruz bunlarla da kontrol ediyoruz
//Container was loaded at görünce diyoruz ki he doğruymuş bu POL'müş
// anladım sanırım çok da takılma yani Ca tammadır şimdi dolarke dolar mı ke jdkdfgjkd
//hadi kgggggg sagıl eyvvvv dksfhdsf


