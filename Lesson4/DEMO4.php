<?php
$number = 1;

/*
while($number <= 10)
{
    if($number %2 == 0)
    {
        echo $number . ' is even <br>';
    }
        else
        {
            echo $number . ' is an odd <br>';
        }
    
    $number++;
}
*/

//break out of loop
/*
for($i = 1; $i <= 10; $i++)
{
    if($i == 5)
    {
        break;
    }
    echo $i . '<br';
}
*/

//skip and continue
/*
for($i = 1; $i <= 10; $i++)
{
    if($i == 5)
    {   
        //echo $i . ' is found' . '<br>';
        continue;
    }
    echo $i . '<br>';
}
*/


$StudentGrade = array
(
    'John' => 75,
    'jack' => 92,
    'Jill' => 100,
    'Joan' => 80,
);

foreach($StudentGrade as $name => $grade)
{
    if($grade >= 90)
    {
        echo $name . ' Has an excellent grade <br>';
    }
        else
        {
            echo $name . ' is Bobo <br>';
        }
}


?>
