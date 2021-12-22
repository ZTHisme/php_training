<?php
/**
 * For create data
 */
include "config.php";
    $stu_name = $_POST['name'];
    $stu_score = $_POST['score'];

$sql = "INSERT INTO demo_table (name, score) VALUES ('$stu_name', '$stu_score')";
$conn->query($sql);
$conn->close();
header("location: ../index.php");
?>