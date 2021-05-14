<?php


$firstTeam = (89 + 120 + 103) / 3;
$secondTeam = (119 + 94 + 123) / 3;
$thirdTeam = (97 + 134 + 105) / 3;

if ($firstTeam > $secondTeam && $firstTeam > $thirdTeam) {
    echo 'The winner is the first team with an average of: ' . $firstTeam . ' points in the last 3 games';
} elseif ($secondTeam > $firstTeam && $secondTeam > $thirdTeam) {
    echo 'The winner is the second team with an average of: ' . $secondTeam . ' points in the last 3 games';
} elseif ($thirdTeam > $firstTeam && $thirdTeam > $secondTeam) {
    echo 'The winner is the third team with an average of: ' . $thirdTeam . ' points in the last 3 games';
} elseif ($firstTeam == $secondTeam && $firstTeam > $thirdTeam) {
    echo 'In the past 3 games the results are odd for the first and second team with it being: ' . $firstTeam . ' points in the last 3 games';
} elseif ($firstTeam == $thirdTeam && $firstTeam > $secondTeam) {
    echo 'In the past 3 games the results are odd for the first and third team with it being: ' . $firstTeam . ' points in the last 3 games';
} elseif ($secondTeam == $thirdTeam && $secondTeam > $firstTeam) {
    echo 'In the past 3 games the results are odd for the second and third team with it being: ' . $secondTeam . ' points in the last 3 games';
}
