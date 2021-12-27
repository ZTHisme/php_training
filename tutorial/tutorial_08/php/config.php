<?php
    /**
     * Create connection
     * Check connection
     */
    $servername = "localhost";
    $username = "root";
    $password = "zth30399";
    $db_name = "php_demo";

    
    $conn = new mysqli($servername, $username, $password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
?>