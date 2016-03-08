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
 
namespace MQHtmlpurifier\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Purify extends AbstractPlugin
{
	private $purifier;
	
	public function __construct($purifier) {
		
		$this->purifier = $purifier;
	}
    /**
     * @param string $data
     *
     * @return string
     */
    public function __invoke($data)
    {            	
        if (is_string($data)) {
            
            $data = $this->purifier->purify($data);
            
        } else if (is_array($data)) {
            
            array_walk_recursive($data, function(&$value, $key) {
                $value = $this->purifier->purify($value);
            });
            
        }
        
        return $data;
    }
}