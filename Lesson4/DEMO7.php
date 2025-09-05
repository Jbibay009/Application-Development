<?php

//$favoriteColor = 'Yellow';
//$SecondFavoriteColor = 'Black';

//ternary
/*
$color = $isset($favoriteColor) ? $favoriteColor : 'blue';

echo $color;
*/

//Null Coalescing operator
//$color = $favoriteColor ?? 'blue';
//$color2 = isset($favoriteColor) ? $favoriteColor : (isset($SecondFavoriteColor) ? $SecondFavoriteColor : 'blue');

$color2 = $favoriteColor ?? $SecondFavoriteColor ?? 'blue';
echo $color2;
?>