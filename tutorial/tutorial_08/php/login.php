<?php
session_start();
include 'config.php';
include 'error.php';
if (isset($_POST['login'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $password = md5($password); //encrypt the password before saving
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($conn, $query);
    // If result matched email and password, table row must be 1 row
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        header('location: ../index.php');
    } else {
        array_push($errors, "Wrong email or password!");
        echo "<script>alert('Wrong email or password!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form method="post" action="login.php">
        <fieldset class="fs-border">
            <legend class="sub-ttl">Login</legend>
            <label class="lb-txt">Email</label>
            <input type="email" name="email" class="input-deco" required>
            <label class="lb-txt">Password</label>
            <input type="password" name="password" class="input-deco" required>
            <p class="lb-txt"><a href="request.php" class="link-txt">Forget Password? </a></p><br>
            <button type="submit" class="btn" name="login">Login</button>
            <p class="lb-txt">
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </fieldset>
    </form>
</body>

</html>
