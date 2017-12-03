<?php
//CSI3130 - Assignment4 - Part1
//Question 3: Estimate the value of pi in PHP using random points

$iters         = 1000000.0; //Number of iterations to run
$radius        = 1.0;
$count         = 0; //Keep track of the number of points in the circle

for ($i = 0; $i < $iters; $i++) {
    $x = rand(0, 1); //Generate random number between 0 and 1
    $y = rand(0, 1); //Generate random number between 0 and 1

    $coords = ($x * $x) + ($y * $y);
    #If coordinates are within circle, increment count
    if ($coords <= ($radius * $radius)) {
        $count++;
    }
}
#Estimate pi as the count within the circle divided by the count in the square(which is all points, so # of iterations)
$pi = ($count * 4.0) / $iters;

echo "The number of points in the square is: ";
echo $iters;
echo "\n";
echo "The number of points inside the circle is: ";
echo $count;
echo "\n";
echo "The estimatation of pi is: ";
echo $pi;
echo "\n";
?>