<?php
$firstNumber = $_POST['firstNumber'];
$secondNumber = $_POST['secondNumber'];
$operand = $_POST['operand'];


if ($operand == 'plus') {
    echo $firstNumber + $secondNumber;
}
if ($operand == 'minus') {
    echo $firstNumber - $secondNumber;
}
if ($operand == 'multiply') {
    echo $firstNumber * $secondNumber;
}
if ($operand == 'divide') {
    echo $firstNumber / $secondNumber;
}
