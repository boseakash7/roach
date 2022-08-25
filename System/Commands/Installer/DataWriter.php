<?php

namespace System\Commands\Installer;

class DataWriter
{
    private $_data;

    private $_dirs = [];

    public function __construct( Data $data )
    {
        $this->_data = $data;
    }

    private function _createDirs( array $dirs )
    {
        foreach ( $dirs as $dir )
        {
            @mkdir(ABS_PATH . DS . $dir, 777, true);
        }
    }

    public function install()
    {
        // First get the storage
        $this->_dirs['storage'] = $this->_data->getStorage();
        $this->_dirs['controllers'] = $this->_data->getControllerDir();
        $this->_dirs['views'] = $this->_data->getViewDir();

        // Once the directories are created we now have storage
        // to work with

        $configModifier = new ConfigModifier();

        // now create the dirs
        $this->_createDirs($this->_dirs);
    }
    
}