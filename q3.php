<?php
$iters = 1000000;
$radius = 1.00;
$radiusSquared = $radius * $radius;
$count = 0;

for($i = 0; $i < $iters; $i++){
    $x = rand(0,1);
    $y = rand(0,1);

    $coords = ($x * $x) + ($y * $y);

    if($coords <= $radiusSquared){
        $count++;
    }
}
$pi = ($count * 4)/$iters;

echo "The number of points in the square is: "; echo $iters; echo "\n";
echo "The number of points inside the circle is: "; echo $count; echo "\n";
echo "The estimatation of pi is: "; echo $pi; echo "\n";
?>