<?php

/**
 * Logout Session
 */
session_start();
echo 'Logout Successfully';

session_destroy();
header('Refresh: 2; URL = ../index.php');
?>