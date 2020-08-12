<?php

//課題1
function twice($two)
{
    $result = $two * 2;
    return $result;
}
echo twice(4) . "\n";

//課題２
function f($a, $b)
{
    $result = $a + $b;
    return $result;
}
echo f(3, 5) . "\n";

//課題3
function sum($arr)
{
    $result = 1;
    foreach ($arr as $arrs) {
        $result *= $arrs;
    }
    return $result;
}
echo sum(array(1,3,5,7,9)) . "\n";

//課題4
function max_array($arr)
{
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(6,2,3,4)) . "\n";

//課題5
//--strig_tags
$str = "<h1>strip_tags
の</h1>"."<p>使い方について<p/>";
echo strip_tags($str) . "\n";

//-array_push
$fruits = ['banana','cherry','apple'];

array_push($fruits, 'banana', 'melon');
print_r($fruits) . "\n";

//array_merge
$fruits1 = [
    0 => 'apple',
    1 => 'strawberry',
    2 => 'banana',
    3 => 'cherry' ];
    
  $fruits2 = [
      0 => 'pineapple',
      1 => 'melon',
      2 => 'orange'  ];
        
   $fruits_merge = array_merge($fruits1, $fruits2);
   print_r($fruits_merge) . "\n";
   
//time, mktime
   echo '現在のタイム'.time() . "\n";
   echo mktime(5, 10, 4, 3, 1, 2020)."\n";
   
//date
   date_default_timezone_set('Asia/tokyo');
   echo date("y/m/d/ h:i:s");
