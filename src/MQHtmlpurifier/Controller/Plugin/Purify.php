<?php

namespace MQHtmlpurifier\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Purify extends AbstractPlugin
{
    /**
     * @param string $data
     *
     * @return string
     */
    public function __invoke($data)
    {        
    	$purifier = $this->getController()->getServiceLocator()->get('purifier');
    	
        if (is_string($data)) {
            
            $data = $purifier->purify($data);
            
        } else if (is_array($data)) {
            
            array_walk_recursive($data, function(&$value, $key) use ($purifier) {
                $value = $purifier->purify($value);
            });
            
        }
        
        return $data;
    }
}