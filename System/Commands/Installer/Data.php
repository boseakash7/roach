<?php

namespace System\Commands\Installer;

use Closure;
use System\Commands\Install;

class Data
{
    private $_host;

    private $_controllerDir;

    private $_viewDir;

    private $_storage;

    private function _read( Install $install, $message, $default, $validator = null )
    {
        $f = function( $value ) use ($validator) { return $validator != null ? $this->$validator($value) : true; };
        $d = Closure::bind($f, $this);
        $data = $install->read($message . ' - (Default - ' . $default . ') ', $d);

        return empty($data) ? $default : $data;
    }

    private function _validateDir( $value )
    {
        return true;
    }
    

    public function collect( Install $install )
    {

        $this->_host = $this->_read(
            $install,
            "Give your host a name.",
            "myWebsite"
        );

        $this->_domain = $this->_read(
            $install,
            "Write domain name with out https. eg. www.example.com",
            "localhost"
        );

        // First collect the controller dir
        $this->_controllerDir = $this->_read(
            $install,
            "What will be controller folder?",
            'Application/Controllers',
            '_validateDir'
        );

        $this->_viewDir = $this->_read(
            $install,
            "What will be views folder?",
            'Application/Views',
            '_validateDir'
        );

        $this->_storage = $this->_read(
            $install,
            "What will be the storage folder?",
            "Storage",
            "_validateDir"
        );

    }

    public function getControllerDir()
    {
        return $this->_controllerDir;
    }

    public function getViewDir()
    {
        return $this->_viewDir;
    }

    public function getStorage()
    {
        return $this->_storage;
    }

}