<?php
/*
 Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop. 
*/


$numbers = [1, 2, 3, 4, 5]; //sum using foreach loop
$numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];  //sum using for loop

// Using foreach loop
echo implode(', ', $numbers);
echo '<br>';
$sum1 = 0;
foreach ($numbers as $num) {
    $sum1 += $num;
}
echo "Sum array using foreach loop";
echo '<br>';
echo $sum1;
echo '<br>';

// Using for loop
echo '<br>';
echo implode(', ', $numbers2);
echo '<br>';
$sum2 = 0;
for ($i = 0; $i < count($numbers2); $i++) 
{
    $sum2 += $numbers2[$i];
}
echo "Sum array using for loop";
echo '<br>';
echo $sum2;
echo '<br>';


/* sample output
Sum array using foreach loop
15
Sum array using for loop
64

*/

?>