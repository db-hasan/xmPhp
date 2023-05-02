<?php
$numbers = [50,60,80,-50,-30,70,10];
$largest = $numbers[0];
$smallest = $numbers[0];
$sum = 0;

foreach( $numbers as $key => $number){
    $sum += $numbers[$key]; 
    if($largest<$numbers[$key]){
        $largest = $numbers[$key];
    }
    if($smallest>$numbers[$key]){
        $smallest = $numbers[$key];
    }
}
echo "Largest Number: " . $largest . "<br>";
echo "Smallest Number: " . $smallest. "<br>";
echo "Sum: " . $sum. "<br>";
?>