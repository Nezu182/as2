<?php
function sum($g) {
    return $g*2;
}
echo sum(2);

function f($a, $b) {
    return $a + $b;
}
echo f(8, 2);

function ggg($arr) {
    $k = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
    $k *= $arr[$i];
    }
    return $k;
}
echo ggg(array(1,3,5,7,9));


function max_array($arr) {
   $max_number = $arr[0];
   foreach($arr as $a) {
    if ($max_number < $a) {
        $max_number = $a;
    }
 }
 return $max_number;
 }
 echo max_array(array(2,4,8,9,10));
 
 $str = "<h1>アイウエオ</h1>"
        ."<p>かきくけこ</p>";
    echo strip_tags($str);
    

$members = array("A","B","C");
array_push($members,"D","E");
print_r($members);

$fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
$fruits2 = ['strawberry', 'cherry', 'watermelon'];
$fruits_merge = array_merge($fruits1, $fruits2);
print_r($fruits_merge);


echo '現在時刻：'.time();

$timestamp = mktime(0, 0, 0, 4, 5, 2020);
echo $timestamp;

echo date('Y-m-d H:i:s');