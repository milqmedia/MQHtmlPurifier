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
 
return array(
    MQHtmlpurifier\Module::CONFIG_KEY_HTMLPURIFIER => array(
        'config' => array(
            'Cache.SerializerPath' => __DIR__ . '/../../../../data/cache/htmlpurifier',
        ),
    ),
    'controller_plugins' => array(
		'invokables' => array(
		),
		'factories' => array(
			'purify' => '\MQHtmlpurifier\Controller\Plugin\Purify'
		)
	),
);
