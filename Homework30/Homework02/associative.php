<?php
$multiCities= [
    array('City'=> 'Tokyo', 'Country'=> 'Japan','Continent'=> 'Asia'),
    array('City'=> 'Mexico City', 'Country'=> 'Mexico','Continent'=> 'North America'),
    array('City'=>'New York City','Country'=>  'USA','Continent'=> 'North America'),
    array('City'=>'Mumbai','Country'=>  'India','Continent'=> 'Asia'),
    array('City'=>'Seoul','Country'=>  'Korea','Continent'=> 'Asia'),
    array('City'=>'Shanghai','Country'=>  'China','Continent'=> 'Asia'),
    array('City'=>'Lagos', 'Country'=> 'Nigeria','Continent'=> 'Africa'),
    array('City'=>'Buenos Aires','Country'=>  'Argentina', 'Continent'=>'South America'),
    array('City'=>'Cairo','Country'=>  'Egypt','Continent'=> 'Africa'),
    array('City'=>'London', 'Country'=> 'UK', 'Continent'=>'Europe')
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
for($i = 0; $i<2; $i++){
    foreach($multiCities[$i] as $key => $firstRow){

        echo $key. '<th>';
}

?>
</tr>
</thead>
 
<?php
//Find the number of rows in the array. Using this variable in the for loop
//instead of the exact number gives you the option of adding to the array 
//at a later date without changing the for loop. 
$num = sizeof($multiCities);
for($i = 0; $i<$num;$i++){
    echo '<tr>';
    foreach($multiCities[$i] as $value){
        echo '<td>' . $value . '</td>';
    }
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