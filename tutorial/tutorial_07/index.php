<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial07</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <html>

    <body>
        <h1 class="main-ttl">QR Code Generate</h1>
        <form method="post" action="index.php">
            <label>Enter ID</label><br>
            <input type="text" name="qr_text">
            <input type="submit" name="submit" value="Generate">
            <img src="images/qr.png" alt="QRcode">
        </form>
    </body>

    </html>
    <?php
    /**
     * QR code generate with user input data
     */
    if (isset($_POST['submit'])) {
        include('./library/phpqrcode/qrlib.php');
        $text = $_POST['qr_text'];
        $folder = "images/";
        $file_name = "qr.png";
        $file_name = $folder . $file_name;
        QRcode::png($text, $file_name);
    }
    ?>
</body>

</html>