<?php

namespace System\Commands;

use System\Core\CLICommand;

class Installer extends CLICommand
{
    private $_controllerDir = 'Application/Controllers';

    private $_viewDir = 'Application/Views';

    public function run( $params )
    {
        $this->_collectData();
    }

    private function _collectData()
    {
        $this->read("What will be controller folder? (Default - Application/Controllers)", function( $value ) {
            if ( empty($value) || is_dir($value) ) return true;

            $this->_controllerDir = $value;
            return true;
        });

        $this->read("What will be views folder? (Default - Application/Views)", function( $value ) {
            if ( empty($value) || is_dir($value) ) return true;

            $this->_viewDir = $value;
            return true;
        });
    }
}