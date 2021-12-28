<?php

/**
 * Logout Session
 */
session_start();
if (session_destroy()) {
    echo 'Logout Successfully';
    header('Refresh: 2; URL = ../php/login.php');
}
?>