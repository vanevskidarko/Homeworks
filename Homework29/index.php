<?php 
$a = [0, 1, 3, 2, 4];
for ($i = 0; $i<count($a); $i++){
    if ($i==3) {
        echo $i;
    }
}

$array = [
    "zero" => 0,
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
];
echo "<br>";
echo $array['three'];

echo "<br>";
if (key_exists('three', $array)){
    echo 'three';
    echo '<br>';
} else {
    echo "no";
    echo "<br>";
}
//3rd exercise HELP?!?!????
$arrays = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
foreach($arrays as $index => $subArray) {
    foreach($subArray as $key => $val) {
        if ($val === 3) {
            echo $val;
            echo '<br>';
        }
    }
} 
//4th
$arr = array(
    "a" => array(
        "b" => 0,
        "c" => 1,
    ),
    "b" => array(
        "e" => 2,
        "o" => array(
            "b" => 3
        )
    )
        );


        $a = "a,b,c,d,e,f";
        $splitArr = explode(",", $a);
        $combineArr = array('a', 'b', 'c', 'd', 'e', 'f');
        $combine = array_combine($splitArr, $combineArr);
        //var_dump($combine);
        echo "<br>";

        $keys = array(
            "field1"=>"first",
            "field2"=>"second",
            "field3"=>"third"
        );
        $values = array(
            "field1value"=>"dinosaur",
            "field2value"=>"pig",
            "field3value"=>"platypus"
        );
        $keysAndValues = array();
        foreach( array( 1, 2, 3 ) as $index ) {
        $keysAndValues[ $keys[ "field$index" ] ] = $values[ "field" . $index . "value" ];
}
        print_r($keysAndValues);
        echo '<br>';

        ///

        $transactions = array(
            array(
                "debit"=>2,
                "credit"=>3
            ),
            array(
                "debit"=>15,
                "credit"=>14
            )
        );
        $new_transactions = array();
        foreach( $transactions as $transaction ) {
            $new_transaction = $transaction;
            $new_transaction[ "amount" ] = abs( $transaction[ "debit" ] - $transaction[ "credit" ] );
            $new_transactions[] = $new_transaction;
        }
        $transactions = $new_transactions;
        print_r($new_transaction);
        echo "<br>";


        $a = array( 0, 1, 2, 3, 4, 5, 6 );
        $sum = 0;
        foreach( $a as $value1 ) {
            $sum += $value1;
        }
        echo $sum;
        echo '<br>';



        ///////////////////////// DATES /////////////////////

        echo "&copy ". date('Y') . '- Code Academy';
        echo '<br>';

        $current = time(); //
        $birthday = strtotime("2021-12-13");
        $diff = $birthday  - $current;
        echo 'There are ' . round($diff/(60*60*24)) . ' days remaining until my birthday';
        echo '<br>';

        $date = date("Y/m/d");
        echo $date;
        echo '<br>';

        function timeDiff($firstTime,$lastTime)
{

$firstTime=strtotime($firstTime);
$lastTime=strtotime($lastTime);
$timeDiff=$lastTime-$firstTime;
return $timeDiff;
}

echo timeDiff("2002-04-16 10:00:00","2002-03-16 18:56:32");
echo "<br>";
echo date('l jS \of F Y h:i:s A');
