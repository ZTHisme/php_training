<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial05</title>
</head>

<body>
    <?php
    /**
     * The data show from text file on browser
     */
    echo '1) Content of text file<br>';
    $file = fopen('sample.txt', 'r');

    while (!feof($file)) {
        echo fgets($file) . '<br />';
    }
    fclose($file);
    ?>
    <?php
    /**
     * The data show from csv file on browser
     */
    echo '<br>2) Content of CSV file<br>';
    echo '<table border="1px" cellspacing="0" cellpadding="0">';
    $csv_file = fopen('sample.csv', 'r');
    while ($read_data = fgetcsv($csv_file, 1024, ',')) {
        $column_count = count($read_data);
        echo '<tr>';
        for ($col = 0; $col < $column_count; $col++) {
            echo '<td>' . $read_data[$col] . '</td>';
        }
        echo '</tr>';
    }
    fclose($csv_file);
    echo '</table>';
    ?>
    <?php
    /**
     * The data show from xlsx file on browser
     */
    echo '<br>3) Content of excel file<br>';
    require_once './library/vendor/shuchkin/simplexlsx/src/SimpleXLSX.php';
    if ($xlsx = SimpleXLSX::parse('sample.xlsx')) {
        echo '<table>';
        $bold = 0;
        foreach ($xlsx->rows() as $data) {
            if ($bold == 0) {
                echo '<thead><tr><th>' . $data[0] . '</th><th>' . $data[1] . '</th></tr></thead>';
            } else {
                echo '<tbody><tr><td>' . $data[0] . '</td><td>' . $data[1] . '</td></tr></tbody>';
            }
            $bold++;
        }

        echo '</table>';
    } else {
        echo SimpleXLSX::parseError();
    }
    ?>
    <?php
    /**
     * The data show from word file on browser
     */
    echo '<br>4) Content of doc file<br>';
    $filename = 'sample.doc';
    function readWord($filename)
    {
        if (file_exists($filename)) {
            if (($doc_file = fopen($filename, 'r')) !== false) {
                $headers = fread($doc_file, 0xA00);

                $char = (ord($headers[0x21C]) - 1);

                $textLength = ($char);

                $extracted_plaintext = fread($doc_file, $textLength);

                return nl2br($extracted_plaintext);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    echo readWord($filename);
    ?>

</body>

</html>