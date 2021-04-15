<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Homework21</h1>
<?php
// First exercise
    $name = "Darko";
    $lastname = "Vanevski";
    $age = 18;
    echo "Jas sum " . $name . " " . $lastname . " i jas imam " . $age . " " . "godini.";

// Second exercise
$x = 5;
$y = 10;
$string_1 = "Yes";
$string_2 = "No";
echo "<br>";
var_dump($x == $y); //false 
echo "<br>";
var_dump($x > $y); //false
echo "<br>";
var_dump($x < $y); //true
echo "<br>";
var_dump($string_1 == $string_2); //false
echo "<br>";
var_dump($string_1 > $string_2); // true raboti comparisment so string vo zavisnost od goleminata na stringot
echo "<br>";
var_dump($string_1 < $string_2); //false
echo "<br>";
echo "<br>";
echo "<br>";
?>
<h1>exercise 3</h1>
//Exercise 3 - Logical operators
<?php
$a = 12;
$b = 15;
var_dump(($x == $y) && ($a == $b));
echo "<br>";
var_dump(($x == $y) || ($a == $b));
echo "<br>";
var_dump(($x == $y) != ($a == $b));
echo "<br>";
var_dump(($x > $y) && ($a > $b));
echo "<br>";
var_dump(($x > $y) || ($a > $b));
echo "<br>";
var_dump(($x > $y) != ($a > $b));
echo "<br>";
var_dump(($x < $y) && ($a < $b));
echo "<br>";
var_dump(($x < $y) || ($a < $b));
echo "<br>";
var_dump(($x < $y) != ($a < $b));
echo "<br>";
?>
<h1>Exercise 4</h1>
<?php 

$fruits = ['Apple', 'Banana' , 'Cherry', 'Mango',];
$cities = [
    "Skopje" => 500000,
    "Hanover" => 890000,
    "Berlin" => 2300000,
    "Glasgow" => 1400000,
    "Aberdeen" => 2200000,
];
echo "<pre>";
var_dump($fruits);
var_dump($cities);
?>
<h1>Exercise 4 - If-else</h1>
<?php 

$m = 60;
$n = 100;

if ($m < $n) {
    echo "You are driving slow.";
}else {
        echo "You are driving fast!";
    }

echo $m < $n ? "You are driving slow." : "You are driving fast!";



?>
<h1> Exercise 5 Switch Case</h1>
<?php 

switch ($m) {
    case ($m < $n);
    echo "You are driving slow.";
    break;
    case ($m > 60) && ($m < 100);
    echo "Normal driving";
    break;

    default:
    echo "You are driving fast";
    break;
}

?>
<h1>Exercise 6 For Loop</h1>
<?php 
for($i=1; $i<=10; $i++)
echo $i . "<br>";
echo "<br>";
echo "<br>";
for($i=10; $i>=0; $i--)
echo $i . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<select>
<?php
for ($i=1;$i<=31;$i++)
echo "<option>" . $i . "</option>";

?>
</select>
<h1>Exercise 7 For Each</h1>
<?php
foreach ($cities as $city => $population){
    echo $city . " : " . $population . "<br>";
}
?>
<h2>Cities between 1 million and 2 million population</h2>
<?php
foreach ($cities as $city => $population){
    if ($population > 100000 && $population < 2000000)
    echo $city . " : " . $population . "<br>";
}
?>
</body>
</html>