<?php

/**
 * MQHtmlPurifier
 * Copyright (c) 2014 Milq Media.
 *
 * @author      Johan Kuijt <johan@milq.nl>
 * @copyright   2014 Milq Media.
 * @license     http://www.opensource.org/licenses/mit-license.php  MIT License
 * @link        http://milq.nl
 */
 
use Zend\Mvc\Application;
chdir(__DIR__ .'/../'); // chdir() to application root
require 'vendor/autoload.php';
/*
 * why another set of config?
 * now that you're writing unit test
 * odds are that you would want to override some production settings here,
 * e.g. load only certain module; use a test database connection, etc
 */
$config =  array(
    'modules' => array(
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './vendor',
        ),
    ),
);
return Application::init($config);