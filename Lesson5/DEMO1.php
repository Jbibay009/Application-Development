<?php
//a fucntion is a block of statament that can be used repeatedly in a progress
// a funtion will not execute automatically when a page loads
// a function will be executed by a call to the function

//simple function

function sayHello()
    {
        echo 'Hello';
    }

//call function

//sayHello();

//funtion return a value

function sayGoodbye()
    {
        return 'Goodbye';
    }

sayGoodbye();

echo sayGoodbye();

//store return value in a variable
$goodbye = sayGoodbye();

echo $goodbye;

?>