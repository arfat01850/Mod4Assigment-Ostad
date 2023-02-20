<?php


$string1 = "This is a valid string";
$string2 = "This is not a valid string 123";

function containLetterAndWhiteSpace($str) {
    if (preg_match('/^[a-zA-Z\s]+$/', $str)) {
      return 1;
    } else {
      return 0;
    }
  }
  

$result1 = containLetterAndWhiteSpace($string1);
$result2 = containLetterAndWhiteSpace($string2);
echo $result1; 
echo PHP_EOL;
echo $result2; 
