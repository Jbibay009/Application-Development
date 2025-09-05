<?php

function applyCallback($callback, $value)
    {
        return $callback($value);
    }

$double = function($number)
    {
        return $number * 2;
    };

$result = applyCallback($double, 10);

echo $result;
echo '<br>';

?>
