<?php
include 'baglan.php';

$pullData = $db->query("Select * from try");
while ($row = $pullData->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row;
  }

foreach ($data as $key => $value) {
    $dataPoints[] = 
        array("y" => $value['try_kur'], "label" => $value['date']);
}

?>
<!DOCTYPE HTML>
<html>

<head>

    
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <form action="curl.php" method="POST">
    <button name="ekle" type="submit" class="btn btn-primary float-right">Güncelle</button>
    </form>



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

</body>

</html>

