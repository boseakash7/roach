<?php

namespace System\Commands\Installer;

class ConfigModifier
{
    public function __construct()
    {
        $this->_readAllConfigs();
    }

    private function _readAllConfigs()
    {
        $data = file_get_contents(ABS_PATH . DS . 'Configs/Application.php');
    }
}