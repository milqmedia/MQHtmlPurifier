<?php
return array(
    MQHtmlpurifier\Module::CONFIG_KEY_HTMLPURIFIER => array(
        'config' => array(
            'Cache.SerializerPath' => __DIR__ . '/../../../../data/cache/htmlpurifier',
        ),
    ),
    'controller_plugins' => array(
		'invokables' => array(
			'purify' => 'MQHtmlpurifier\Controller\Plugin\Purify',
		)
	),
);