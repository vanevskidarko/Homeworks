<?php
// name / email/ message

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

for ($i=1;$i<=100; $i++) {
    if(!file_exists('contacts/contact'.$i.'.txt')) {
        // contact1.txt
        file_put_contents('contacts/contact'.$i.'.txt');
        break;
    }
}
 