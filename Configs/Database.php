<?php

use System\Core\Config;

$database = Config::get('Database');

$database->set(array(
    // 'host' => 'host',
    // 'user' => 'user',
    // 'password' => 'pass',
    // 'database' => 'dbname',
    // 'port' => 3306,

    // Connection options
    'options' => [
        // Database options here
    ]
));