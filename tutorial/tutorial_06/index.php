<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial06</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <label>Enter the folder name</label>
        <input type="text" name="foldername" required>
        <br><br>
        <input type="file" name="files[]" accept="image/*" required>
        <br><br>
        <input type="submit" name="submit" value="Save">
    </form>

    <?php
    /**
     * Create the folder with the user input name
     * Save image inside the folder
     */
    if (isset($_POST['submit'])) {

        if ($_POST['foldername'] != '') {
            $foldername  = $_POST['foldername'];
            if (!is_dir($foldername));
            if (!file_exists($foldername)) {
                mkdir($foldername, 0700, true);
            }
            foreach ($_FILES['files']['name'] as $filename => $imgname) {
                move_uploaded_file($_FILES['files']['tmp_name'][$filename], $foldername . '/' . $imgname);
            }
            echo 'Successfully uploaded.';
        } else
            echo 'Uploaded failed.';
    }
    ?>
</body>

</html>