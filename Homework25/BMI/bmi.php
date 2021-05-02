<?php
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $weight / ($height * $height);

if ($height > 2.5) {
    echo 'Who are you trying to fool?';
}
if ($height > 2.5) {
    echo 'Who are you trying to fool?';
}
if ($weight > 200) {
    echo 'Who are you trying to fool';
}
if ($weight < 20) {
    echo 'Who are you trying to fool';
} else {
    echo $bmi;
}
