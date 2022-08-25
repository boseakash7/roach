<?php

namespace System\Commands\Installer;

use System\Core\CLICommand;

class Installer
{

    private $_c;

    public function __construct( CLICommand $c )
    {
        $this->_c = $c;
    }

    public function install()
    {
        $data = new Data();
        $data->collect( $this->_c );

        $dataWriter = new DataWriter($data);

        $dataWriter->install();
    }

}