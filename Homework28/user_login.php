<?php
session_start(); // start working with session
 

// User Form username and password

// login form
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // if file with name -> $_POST['username'] exists?
    // if exists 
    // if password === password from file
    //• file_exists(“file.txt”) - check if file or directory exist
    $fileName = 'users/' . $username . '.txt';
    if (file_exists($fileName)){

        $hashedString = file_get_contents($fileName);

        if (password_verify($password, $hashedString)){
            // user login code
            $_SESSION["loggedIn"] = "yes";
            $_SESSION["username"] = $username;

            header('Location: profile.php');
        }
        else {
            echo 'Password is not correct';
        }
    }
    else {
        echo 'User doesn\'t exist';
    }
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == 'admin' && $password == 'admin123'){
            header('Location: log.php');
        }
    }
    
}
// Cookie loginIn = true;