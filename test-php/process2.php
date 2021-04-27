<?php
session_start();
$_SESSION['success'] = "succesful";
$_SESSION['error'] = 'error';
if (isset($_GET['submit']) && !empty($_GET['submit'])) {
    header('Location: index.php');
}
