<?php
session_start(); // start working with session
$user = 'Darko';
$password = 'password';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user && $_POST['password'] == $password) {
        $_SESSION["loggedIn"] = "yes"; // true = 1 , false=0
        header('Location: profile.php');
    } else {
        $_SESSION['loggedIn'] = 'no';
        header('Location: login.php');
    }
}
// Cookie loginIn = true;