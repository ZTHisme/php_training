<?php
/**
 * For create data
 */
include "config.php";
    $stu_name = $_POST['name'];
    $stu_email = $_POST['email'];
    $stu_address = $_POST['address'];
    $stu_phnum = $_POST['phnum'];
    $stu_score = $_POST['score'];

$sql = "INSERT INTO stu_table (name, email, address, phnum, score) VALUES ('$stu_name', '$stu_email', '$stu_address', '$stu_phnum', '$stu_score')";
$conn->query($sql);
$conn->close();
header("location: ../index.php");
?>