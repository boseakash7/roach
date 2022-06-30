<?php

use System\Core\Config;

$application = Config::get('Application');
$application->set([

    /**
     * Application version
     */
    'version' => '0.0.1',

    /**
     * Environment could be prod (Production) and dev (Development)
     */
    'environment' => 'dev',

    /**
     * This framework can support
     * Multiple urls remember that, thats why this parameter is taken
     * in an array
     */
    'site_urls' => [        
        // 'site1' => 'site1.com',
        // 'site2' => 'site2.com'
        // You can add more web in below.
    ],

    /**
     * Force redirect http to https
     */
    // 'force_https' => false,

    /**
     * Allowed characters to url
     */
    // 'allowed_uri_chars' => 'A-z0-9',

    /**
     * Enable modules globally
     */
    'enable_system_modules' => [
        // 'site1' => [
        //     '\System\Models\Session' => [
        //         'name' => "session_name"
        //     ],

        //     '\System\Models\Language' => [
        //         'default_lang' => 'en'
        //     ],

        //     // Enable Hooks
        //     '\System\Models\Hooks' => [
        //         'binds' => [                    
        //             'namespace.event' => [
        //                 '\Application\Hooks\Service::validateCanBook',
        //             ],
        //         ]
        //     ],
            
        //     '\System\Models\Email' => [
        //         'use_smtp' => true,
        //         'debug' => true,
        //         'smtp_host' => '',
        //         'smtp_username' => '',
        //         'smtp_password' => '',
        //         'smtp_port' =>  0,
        //         'smtp_encryption' => 'ssl',
        //         'from_email' => '',
        //         'from_name' => ''
        //     ]
        //     //  Other models you can add here.
        // ],

        // 'site2' => [

        //     '\System\Models\Session' => [
        //         'name' => "photo"
        //     ],
        //      Other models you can add here.
        //  ]

    ],

    /**
     * Directory where views are stored.
     */
    // 'view_directory' => 'Path/To/Views/Dir',

    /**
     * Directory where controllers are stored.
     */
    // 'controller_directory' => 'Path/To/Controller/Dir',

    // If you have created any custom config file 
    // You can add it here for auto load.
    // Example is given bellow.
    // 'extra_configs' => [
    //     'Configs/Website',
    // ],

    // Where is composer autoload file?
    // 'composer_autoload_path' => 'Path/To/vendor/autoload.php',
    
    /**
    * Set an 404 error page controller
    */
    // 'page_404' => [
    //     'action' => 'Error',
    //     'method' => 'error404'
    // ],

    /**
     * Control the application memory limit.
     * Please also use this memory limit if you are using AutoOptimizer for images,
     * If auto optimizer don't work then please increase the limit based on your need first.
     * Then look somewhere else
     */
    // 'memory_limit' => '128M',

    // 'enable_auto_optimize' => true,

    // 'auto_optimizer_storage_directory' => 'Path/To/Dir',

    // 'auto_optimizer_route' => 'uri/to/optimize',

    /**
     * Define the commands for cli
     */
    'commands' => [        
        // 'command' => 'Path\To\Command'
    ]
]);