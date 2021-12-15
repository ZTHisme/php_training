<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <?php
        /**
         *Create chess board 
         */
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td id='td1'></td>";
                } else {
                    echo "<td id='td2'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>