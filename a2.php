<?php
/*
Write a PHP function to concatenate two strings, 
but with the second string starting from the end of the first string.
*/



$string1 = "Abdur";

$string2 = "Rahim";

$revNewString2 = strrev($string2);

$newString = $string1.$revNewString2; 

echo $newString;


