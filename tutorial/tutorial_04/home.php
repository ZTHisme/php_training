<?php

/**
 * Login Session
 */
$uname = "admin@gmail.com";
$pwd = "admin";

session_start();

if (isset($_SESSION['uname'])) {
    echo "<h1>Welcome " . $_SESSION['uname'] . "</h1>";
    echo "<a href='logout.php' type=button name=logout>Logout</a>";
} else {
    if ($_POST['uname'] == $uname && $_POST['pwd'] == $pwd) {
        $_SESSION['uname'] = $uname;
        header("Location:home.php");
    } else {
        echo "<script>alert('username or password incorrect!')</script>";
        header('Refresh: 1; URL = index.php');
    }
}
?>