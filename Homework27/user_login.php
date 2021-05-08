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
        $fileContent = file_get_contents($fileName);
        if ($password == $fileContent){
            $_SESSION["loggedIn"] = "yes";
            header('Location: profile.php');
        }
        else {
            echo 'Password is not correct';
        }
    }
    else {
        echo 'User doesn\'t exist';
    }
    
}
// Cookie loginIn = true;