<?php
//regular named function

function add($a, $b)
    {
        return $a + $b; 
    }

echo add(3, 3);
echo '<br>';

$add = fn($a, $b) => $a + $b;

echo $add(2, 3);

?>