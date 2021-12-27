<?php
/**
 * For delete data
 */
include 'config.php';
$id = $_GET['id'];
$sql = "Delete from stu_table where id=$id";
$conn->query($sql);
$conn->close();
header("location: ../index.php");
?>