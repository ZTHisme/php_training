<?php

/**
 * Display Chart Using Chart.JS
 */
include 'config.php';
$name = '';
$score = '';


$sql = "SELECT * FROM `demo_table` ";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_array($result)) {

    $name = $name . '"' . $row['name'] . '",';
    $score = $score . '"' . $row['score'] . '",';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <script type="text/javascript" src="../js/chart.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div>
        <h1>Student Marks Information Chart</h1>
        <canvas id="first-chart"></canvas><br>
        <canvas id="sec-chart"></canvas><br>
        <canvas id="third-chart"></canvas>
        <script>
            var graph = document.getElementById('first-chart');
            var myChart = new Chart(graph, {
                type: 'line',
                data: {
                    labels: [<?php echo $name; ?>],
                    datasets: [{
                        label: 'Marks',
                        data: [<?php echo $score; ?>],
                        backgroundColor: 'transparent',
                        borderColor: '#0084ff',
                        borderWidth: 1
                    }]
                },
            });
            var secgraph = document.getElementById('sec-chart');
            var myChart = new Chart(secgraph, {
                type: 'bar',
                data: {
                    labels: [<?php echo $name; ?>],
                    datasets: [{
                        label: 'Marks',
                        data: [<?php echo $score; ?>],
                        backgroundColor: '#0084ff',
                        borderColor: '#0084ff',
                        borderWidth: 1
                    }]
                },
            });
            var thirdgraph = document.getElementById('third-chart');
            var myChart = new Chart(thirdgraph, {
                type: 'doughnut',
                data: {
                    labels: [<?php echo $name; ?>],
                    datasets: [{
                        data: [<?php echo $score; ?>],
                        backgroundColor: ["#0074D9", "#FF4136", "#2ECC40", "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00", "#001f3f", "#39CCCC", "#01FF70", "#85144b", "#F012BE", "#3D9970", "#111111", "#AAAAAA"],
                        hoverOffset: 4
                    }]
                },
            });
        </script>
    </div>
    <br>
    <a href='../index.php' class='btn'>&#8592; Back</a>
</body>

</html>