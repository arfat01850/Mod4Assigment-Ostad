<?php
/*
 Question no-1: write a PHP funtion to sort an array of 
strings by teir length, ascending order. 
(hint: you can use the usort()funtion to define a custom sorting funtion)
*/

$studentsName = array("Abdur Rahim", "Mehedi Hasan", "Azadul joy", "Tanvir", "Kurshed", );
function sort_strings_by_length(array $studentsName): array {
    usort($studentsName, function($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $studentsName;
}

$sorted_strings = sort_strings_by_length($studentsName);
print_r($sorted_strings);



