<?php

namespace System\Commands\Installer;

use System\Core\Config;

class ConfigModifier
{
    public function __construct()
    {
        $this->_readAllConfigs();
    }

    private function _readAllConfigs()
    {
        $config = Config::get("Application");
        var_dump($config->getAll());exit;
        $data = file_get_contents(ABS_PATH . DS . 'Configs/Application.php');
    }
}