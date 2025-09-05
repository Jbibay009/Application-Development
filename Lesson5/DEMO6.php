<?php
//Anonymous function
$square = function ($number)
    {
        return $number * $number;
    };
$result = $square(5);

//echo 'The Square root of 5 is '. $result;

//closure and outer scope access

function createCounter()
    {
        $count = 0;

        //define a closure that capture the $count variable
        $counter = function() use(&$count)
        {
            return++$count;
        };

        return $counter;
    }
$counter = createCounter();

echo $counter(). '<br>';
echo $counter(). '<br>';
echo $counter(). '<br>';
echo $counter(). '<br>';
echo $counter(). '<br>';

?>