<?php

namespace System\Commands;

use System\Commands\Installer\Installer;
use System\Core\CLICommand;

class Install extends CLICommand
{

    public function run( $params )
    {
        $installer = new Installer($this);
        $installer->install();
    }
}