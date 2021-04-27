<?php
session_start();
$_SESSION['success'] = "succesful";
$_SESSION['error'] = 'error';
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    header('Location: index.php');
}
