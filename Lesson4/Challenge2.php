<?php
$names = ['ALEC', 'BETH', 'CAROLINE', 'DAve', 'ElAnor', 'ANNa', 'Freddie', 'AdaM'];

foreach($names as $name)
{
    if (strtoupper($name[0]) == 'A') 
    {
        continue;
    }
    
    $reversedName = strtolower(strrev($name));
    echo $reversedName;
    echo '<br>';
}

?>