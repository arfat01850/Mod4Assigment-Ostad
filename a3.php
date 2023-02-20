<?php

/*
Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
*/


$studentsName = array("Abdur Rahim", "Mehedi Hasan", "Azadul joy", "Tanvir", "Kurshed");
function studentinfo($studentsName){
$removeFirstItem = array_shift($studentsName);
print_r($removeFirstItem);

$removeLastItem = array_pop($studentsName);
print_r($removeLastItem);
print_r($studentsName);

}
return studentinfo($studentsName);