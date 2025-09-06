<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: admin-login.php");
    exit();
}

include('../config.php');
include('./includes/header.php');
include('./includes/admin-nav.php');
?>

