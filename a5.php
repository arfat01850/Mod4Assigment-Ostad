<?php




function find_second_largest($arr) {
    $max = $arr[0];
    $second_max = null;
  
    for ($i = 1; $i < count($arr); $i++) {
      if ($arr[$i] > $max) {
        $second_max = $max;
        $max = $arr[$i];
      } else if ($arr[$i] != $max && ($second_max === null || $arr[$i] > $second_max)) {
        $second_max = $arr[$i];
      }
    }
  
    return $second_max;
  }

  
  $my_array = array(10, 5, 8,100, 30,40, 20, 2);
$second_largest = find_second_largest($my_array);
echo $second_largest; 
