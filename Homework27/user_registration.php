<?php
session_start();
//register
if(isset($_POST['register'])){
    if( !empty($_POST['name']) 
        && !empty($_POST['username'])
        && !empty($_POST['password'])
        && !empty($_POST['password_confirm']))
    {
        if($_POST['password'] == $_POST['password_confirm']) {

            $username = $_POST['username'];
            $filename = "users/".$username.".txt";
            $content = $_POST['password'];
       
            file_put_contents($filename, $content);

            echo "User ".$_POST['name']." registered. Thank you, go to login page <a href='login.php'>Login</a>";
        } else {
            echo "Password doesn't match";
        }

    }
}
 
