<?php
$multiCity= [
    array('City', 'Country', 'Continent'), // table header
    array('Tokyo', 'Japan', 'Asia'),
    array('Mexico City','Mexico', 'North America'),
    array('New York City', 'USA', 'North America'),
    array('Mumbai', 'India', 'Asia'),
    array('Seoul', 'Korea', 'Asia'),
    array('Shanghai', 'China', 'Asia'),
    array('Lagos', 'Nigeria', 'Africa'),
    array('Buenos Aires', 'Argentina', 'South America'),
    array('Cairo', 'Egypt', 'Africa'),
    array('London', 'UK','Europe')
];
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-dimensional Array</title>
    <style type="text/css">
    td, th {
        width: 8em; 
        border: 1px solid black; 
        padding-left: 4px;
        }
    th {
        text-align:center;
        }
    table {
        border-collapse: collapse; 
        border: 1px solid black;
        }
    </style>
</head>
 
<body>
<h2>City Table<br /></h2>
 
<table>
<thead>
<tr>
<th>
<?php
// echo  here first row of $multiCity
echo $multiCity[0][0] .  "</th>\n<th>"; // City
echo $multiCity[0][1] . "</th>\n<th>"; // Country
echo $multiCity[0][2] . "</th>\n"; // Continent
?>
</tr>
</thead>
 
<?php
//Find the number of rows in the array. Using this variable in the for loop
//instead of the exact number gives you the option of adding to the array 
//at a later date without changing the for loop. 
$num = count($multiCity);
for ($i = 1; $i < $num; $i++){
    echo '<tr>';
    foreach($multiCity[$i] as $value){
        echo '<td>' . $value. '</td>';
    }
    echo '</tr>';
}

//For loops begin with "0" to iterate over an entire array. In this case, 
//you need to begin with the second item in the array and must start with "1".

// Write for loop with <tr>  to loop over multiCity array
// Inside for loop create foreach loop where you will output with <td> each city,country,continent in one row

 
?>
 
</table>
 
</body>
</html>