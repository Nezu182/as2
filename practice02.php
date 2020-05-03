<?php

$name = "Nezu";
if ($name == "Nezu") {
 echo "私は Nezu です";
}else {
 echo " Nezu ではありません";
}


$totale = 0;
echo $totale;

for ($i = 0; $i <= 10000; $i++) {
    $totale += $i;
}
echo $totale;


$fruits = array("apple", "orange", "lemon","coconut","strawberry");
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo "\n";
}

$strat = 1;
$end   = 100;

for ($i = $strat; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
        
    }
}