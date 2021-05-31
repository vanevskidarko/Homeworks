<?php 
// CSV Movie database
$filename="movies/movies.csv";

// 1) Code function readCsv($filename) which is located at line #31 below, which will read the csv file and return all rows from CSV in array 

$movies = readCsv($filename);  


// 3) Check For form $_POST if year is selected and if its selected put it in $selectedYear variable
$years = [];

$filterResult = $movies;

$selectedYear = null;

 if(isset($_POST['year'])){
     $selectedYear = $_POST['year'];
 }


// array of filtered Movies
$filteredMovies = [];
// array of years
$years = [];

/* 4) Create a foreach loop where :
    - put all years in $years array
    - if user selected year in filter, put the movie with selected year in $filteredMovies array
    - if user not selected year in filter, put all movies in $filteredMovies array
*/

    foreach($movies as $movie){
        $years[] = $movie[7];

        if($selectedYear){
            $filterResult = [];
            foreach ($movies as $line){
                $fileYear = $line[7];
                if($selectedYear == $fileYear){
                    $filterResult[] = $line;
            }
        }
    }
}
// 5) Make sure array $years has unique values. Use array_unique() function
$years = array_unique($years);
sort($years);
sort($filterResult);
// 6) Make sure both arrays $years and $filteredMovies are sorted. use sort() function 

 
 function readCsv($filename) {
    // your code here
    $handle = fopen($filename, "r");
    $result = [];

    while(!feof($handle)){
        $result[] = fgetcsv($handle);
    }
    fclose($handle);
    return $result;
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movie FIlter</h1>
        <form class="form-inline" method="POST">
 
            <label class="my-1 mr-2" >Select year: </label>
            <select class="custom-select my-1 mr-sm-2" name="year">
                <option value="" selected>Choose...</option>
                <!-- List Years from CSV file here, with ternary if operator add "selected" if the year in loop is same as $selectedYear -->
                <?php foreach($years as $line):?>
                <option value="<?php echo $line?>" <?php echo ($selectedYear== $line ? 'selected' : '');?>><?php echo $line;?></option>
                <?php endforeach;?>
            </select>
            <button type="submit" class="btn btn-primary my-1">Filter</button>
        </form>
 
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Film</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Lead Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <!-- Write Your Foreach here! to output movies from $filteredMovies array -->
                <?php foreach($filterResult as $line):?>
                <tr>
                    <td><?php echo $line[0] ?></td>
                    <td><?php echo $line[1] ?></td>
                    <td><?php echo $line[2] ?></td>
                    <td><?php echo $line[count($line)-1] ?></td>
                </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>

</html>