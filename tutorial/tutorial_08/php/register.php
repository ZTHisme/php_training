<?php
session_start();
include 'config.php';
include 'error.php';
if (isset($_POST['submit'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    //check in the database that user input data is already exist or not
    $user_check = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
            echo "<script>alert('Email already exists!');</script>";
        }
    }
    //register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password); //encrypt the password before saving 
        $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        header('location: ../index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial10</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form method="post" action="register.php">
        <fieldset class="fs-border">
            <legend class="sub-ttl">Sign Up</legend>
            <label class="lb-txt">Username</label>
            <input type="text" name="username" class="input-deco" required><br>
            <label class="lb-txt">Email</label>
            <input type="email" name="email" class="input-deco" required><br>
            <label class="lb-txt">Password</label>
            <input type="password" name="password" class="input-deco" required><br>
            <input type="submit" name="submit" value="Submit" class="btn">
            <p class="lb-txt">
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </fieldset>
</body>

</html>