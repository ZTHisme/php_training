<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial02</title>
</head>

<body>
    <?php
    $n = 11;
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            for ($k = $n; $k >= $i; $k--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "* &ensp;";
            }
            echo "<br>";
        }
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        if ($i % 2 != 0) {
            for ($k = $n; $k >= $i; $k--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= $i; $j++) {
                echo "* &ensp;";
            }
            echo "<br>";
        }
    }
    ?>
</body>

</html>