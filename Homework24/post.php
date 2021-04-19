<?php
    if(isset($_POST['submit'])){
        $un = $_POST['username'];
        $pw = $_POST['password'];
        if ($un=='username' && $pw=='password'){
            header("location:home.html");
        }
    }
    ?>