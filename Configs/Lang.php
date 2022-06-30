<?php

use System\Core\Config;

$lang = Config::get('Lang');


$lang->set(array(

    'en' => include 'Langs/en.php',
    // 'hi' => include 'Langs/hi.php',

));