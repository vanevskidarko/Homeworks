<?php

$email = $_POST['email'];

// $email not empty

$filename = 'user_emails.txt';

file_put_contents($filename, $email, FILE_APPEND);
