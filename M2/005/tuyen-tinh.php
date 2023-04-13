<?php
$find = 23;
$numbers = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
        // 0  1  2  3    4  5    6  7   8   9
// Lần 1
$L = 0;
$R = count( $numbers ) - 1;
// So sánh giá trị tại M
//Lần 2
if( $find > $numbers[$M] ){
    $L = $M + 1;
    // $R = 9
}

//$L = 5;
//$R = 9;
$M = floor( ( $L + $R ) / 2 ); //7 => 56

// Lần 3
if( $find < $numbers[$M] ){
    $R = $M - 1;
    //$L = 5;
}
$M = floor( ( $L + $R ) / 2 ); //5 => 23
var_dump('L:'. $L .', R: '. $R.', M:'.$M);



