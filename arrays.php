<?php

$a = ['apple', 'car', 'keyboard', 'phone', 'mouse'];
$b = ['laptop', 'car', 'monitor', 'keys', 'pen', 'phone'];

//$c = ['apple', 'car', 'keyboard', 'phone', 'mouse'.'laptop', 'monitor', 'keys', 'pen'];



for($i = 0; $i < count($b); $i++ ){

    $currentItem = $b[$i];
    $exists = false;

    for($j = 0; $j < count($a); $j++ ){

        if($currentItem == $a[$j]) {
            $exists = true;
            break;
        }
    }

    if($exists == false){
        //add item to database
    }
}

for($i = 0; $i < count($a); $i++ ){

    $currentItem = $a[$i];
    $exists = true;

    for($j = 0; $j < count($b); $j++ ){

        if($currentItem == $b[$j]) {
            $exists = false;
            break;
        }
    }

    if($exists == false){
        //delete item from database
    }
}
echo $b;
