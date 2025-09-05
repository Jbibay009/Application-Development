<?php
//funciton with argument

function add($a, $b)
    {
        return $a + $b;
    }
echo add(1, 2);
echo '<br>';

echo add(5, 5);
echo '<br>';

echo add(6, 9);
echo '<br>';

echo add(130, 56);
echo '<br>';

//default argument

function sayHello($name = 'World')
    {
        return 'Hello '. $name;
    }
$greeting = sayHello();
echo $greeting;
echo '<br>';

$greeting2 = sayHello('Luffy');
echo $greeting2;
echo '<br>';

//variable arguments

function addAll(...$numbers)
    {
        $total = 0;
        foreach($numbers as $number)
        {
            $total += $number;
        }

        return $total;
    }
echo addAll(1, 2, 3, 4, 5);
echo '<br>';

echo addAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo '<br>';



?>