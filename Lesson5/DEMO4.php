<?php

define('APP_NAME', 'Inventory System');
define('APP_VERSION', 'Version 1.0');

echo APP_NAME;
echo '<br>';
echo APP_VERSION;
echo '<br>';

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME;
echo '<br>';
echo DB_HOST;

function run()
    {
        echo APP_NAME;
        echo '<br>';
        echo DB_NAME, DB_HOST;
    }
run();

?>