<?php
/**
 * For update data
 */
include 'config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phnum = $_POST['phnum'];
$score = $_POST['score'];
$sql = "Update stu_table set name='$name', email='$email', address='$address', phnum='$phnum',score='$score' where id=$id";
$result = $conn->query($sql);
$conn->close();
header("location: ../index.php");
?>