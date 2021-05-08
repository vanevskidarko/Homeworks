<?php
$email = $_POST['email2'];
//check if email exists
$filename = 'user_emails.txt';
file_put_contents($filename, $email, FILE_APPEND);
?>
