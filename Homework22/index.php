<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 22</title>
</head>
<body>
    <?php

    function voidPrint(){
        echo "This is a string";
    }
    voidPrint();
    echo "<br>";
    function one($x)  {
        echo $x;
    }
    one("This is a string");
    echo "<br>";
    function multiply($x, $y) {
        echo $x * $y;
    }
    multiply(5,8);
    echo "<br>";
    function returnArr($a, $b, $c){
        
        echo $a, $b, $c;
    }
    returnArr(5,3 ,2);
    echo "<br>";

    function calculate($x, $y) {
        echo $x * $y;
    }
    calculate(6,6);
    echo "<br>";
    function iterate($x){
        for ($i = 0; $i<$x; $i++){
            echo "the variable " . $x . " is printed out " . $x . " times" . "<br>";
        }
    }
    iterate(6);
    ?>
    
</body>
</html>