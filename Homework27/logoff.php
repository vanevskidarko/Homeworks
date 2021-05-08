<?php
session_start();

if (isset($_SESSION["loggedIn"])){
    $_SESSION["loggedIn"] = "no";
    header('Location: login.php');
}
header('Location: login.php');