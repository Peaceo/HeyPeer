<?php

// function user_grade($input){
$input = 100;
$grade = match (true) {
    $input < 29 => 'F',
    $input < 40 => 'E',
    $input < 50 => 'D',
    $input < 60 => 'C',
    $input < 70 => 'B',
    $input < 100.001 => 'A',
    $input > 100 => $input . ' is not a valid grade',
};

var_dump($grade);                    
    // return $grade;
// }

