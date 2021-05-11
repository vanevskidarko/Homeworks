<?php
session_start(); 
 

// $_GET, $_POST
// $_FILES

// var_dump($_FILES);
var_dump($_SESSION["username"]);
$targetFolder = "uploads/".$_SESSION["username"]."/";

if( isset($_FILES["userAvatar"])) {
    // move_uploaded_file();
    //$_FILES["userAvatar"]["tmp_name"] - temporary place where php save file userAvatar 
    move_uploaded_file($_FILES["userAvatar"]["tmp_name"], $targetFolder."avatar.jpg");
    header('Location: profile.php');
}
