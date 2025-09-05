<?php

//global scope
$name = 'Luffy';

function sayHello()
    {
        //local scope
        global $name;
        echo 'Hello ' . $name;
    }
sayHello();
echo '<br>';

function sayGoodbye()
    {
        $names = ['Luffy', 'Zoro', 'Sanji'];
        echo 'Goodbye '. $names[0];
    }
sayGoodbye();
echo '<br>';

// error > echo $names[0];


?>
