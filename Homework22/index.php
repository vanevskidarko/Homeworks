<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 22</title>
</head>
<body>
    <h1>15 string and array functions</h1>
    <?php
    //addcslashes ( string $string , string $characters ) : string
    $string = "This is a string";
    $string2 = "String";
    echo(addcslashes($string, "s"));
    echo "<br>";

    //lcfirst
    echo(lcfirst($string));
    echo "<br>";

    //sha1
    echo(sha1($string));
    echo "<br>";

    //str_repeat
    echo (str_repeat($string,2));
    echo "<br>";

    //strrev
    echo (strrev($string));
    echo "<br>";

    //ucfirst
    echo(ucfirst($string));
    echo "<br>";

    //strlen
    echo (strlen($string));
    echo "<br>";

    //strpos
    echo (strpos($string, "is"));
    echo "<br>";

    //str_word_count

    echo (str_word_count($string));
    echo "<br>";

    //str_split
    print_r(str_split($string2));
    echo "<br>";



    //strchr
    echo (strchr($string, "k"));
    echo "<br>";

    //str_shuffle
    echo (str_shuffle($string));
    echo "<br>";



    ?>
    <br>
    <br>
    <h1>Array Functions</h1>
    <?php
    $array = ["keychain", "rims", "hood", "brother", "pipe", "memes", "obese" , "hood"];
    $array2 = [
        "name" => "Darko",
        "Age" => "18",
        "City" => "Skopje",
        "Food" => "yes",
        "Key" => "value",
        "equal" => "values",
        "as" => "previous"

    ];
    //arr_reverse
    print_r(array_reverse($array));
    echo "<br>";
    
    //arr_flip
    print_r(array_flip($array));
    echo "<br>";

    //arr_key_first
    print_r(array_key_first($array));
    echo "<br>";

    //arr_key_last
    print_r(array_key_last($array));
    echo "<br>";

    //arr_pop
    print_r(array_pop($array));
    echo "<br>";

    //arr_slicr
    print_r(array_slice($array, 3));
    echo "<br>";

    //arr_values
    print_r(array_values($array));
    echo "<br>";

    //key
    print_r(key($array));
    echo "<br>";

    //sizeof
    print_r(sizeof($array));
    echo "<br>";

    //shuff;e
    print_r(shuffle($array));
    echo "<br>";

    //rsort
    print_r(rsort($array));
    echo "<br>";

    print_r(array_diff_key($array, $array2));
    echo "<br>";

    print_r(array_keys($array2));
    echo "<br>";

    print_r(array_unique($array));
    ?>
</body>
</html>