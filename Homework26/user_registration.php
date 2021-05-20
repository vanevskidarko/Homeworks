<?php
session_start();
if (isset($_POST['register'])) {
    if (
        !empty($_POST['name'])
        && !empty($_POST['username'])
        && !empty($_POST['password'])
        && !empty($_POST['passwordConfirm'])
    ) {
        if ($_POST['password'] == $_POST['passwordConfirm']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            echo "User " . $_POST['name'] . "registered.Thank you go to <a href='login.php'>Login</a>";
        } else {
            echo "Password does not match";
        }
    }
}
