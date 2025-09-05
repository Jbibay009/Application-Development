<?php

$age = 17;
$ave = 80;

//if statement

if($age >= 18)
{
    echo 'You are allowed to vote';
}
echo '<br>';
//if else statement

if($ave >= 75)
{
    echo 'Your average is Good';
}
    else
    {
        echo 'Your average is Bad';
    }
echo '<br>';

//Nested if statement
if($age >= 18)
{
    echo 'You are allowed to vote';
}
    else
    {
        if($age == 17)
        {
        echo 'Try again next year';
        }
            else
            {
            echo 'No Voting';
            }
    }
echo '<br>';

// if else if state 
if($age == 100)
{
    echo 'Your average is Excellent';
}
    else if($ave >= 90)
    {
        echo 'Your average is Good';
    }
    else if($ave >= 80)
    {
        echo 'Your average is Okay';
    }
    else
    {
    echo 'Your average is Not Okay';
    }
echo '<br>';





?>