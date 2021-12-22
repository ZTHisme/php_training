<?php
/**
 * For update data
 */
include 'config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$score = $_POST['score'];
$sql = "Update demo_table set name='$name', score='$score' where id=$id";
$result = $conn->query($sql);
$conn->close();
header("location: ../index.php");
?>