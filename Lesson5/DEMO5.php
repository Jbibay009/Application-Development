<?php
declare(strict_types=1);

function getSum(int $a, int $b)
: int{
        return $a + $b;
    }
echo getSum(5, 10);
echo '<br>';

function greeting(string $name)
    : string{
        
        return 'Hello '. $name;
    }
echo greeting('Luffy');
echo '<br>';



?>