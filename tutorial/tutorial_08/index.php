<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial08</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <p><a href="../php/logout.php" class="btn">&#8592 Logout</a></p>
    <form action="./php/create.php" method="POST">
        <fieldset class="fs-border">
            <legend class="sub-ttl">Student Marks Information</legend>
            <label class="lb-txt">Name</label>
            <input type="text" name="name" class="input-deco" required><br>
            <label class="lb-txt">Email</label>
            <input type="text" name="email" class="input-deco" required><br>
            <label class="lb-txt">Address</label>
            <input type="text" name="address" class="input-deco" required><br>
            <label class="lb-txt">Phone</label>
            <input type="number" name="phnum" class="input-deco" required><br>
            <label class="lb-txt">Score</label>
            <input type="number" name="score" class="input-deco" required><br>
            <input type="submit" name="submit" value="Submit" class="btn">
        </fieldset>
    </form>
    <table>
        <tbody>
            <?php include "./php/read.php"; ?>
        </tbody>
    </table>
    <a href='./php/chart.php' class='btn right-side'>Show Chart &#8594;</a>

</body>

</html>