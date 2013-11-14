<?php

namespace MQHtmlpurifier\Controller\Plugin;

use Zend\Http\Request;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class Purify extends AbstractPlugin
{
    /** @var \HTMLPurifier */
    protected $purifier;

    /**
     * @param \HTMLPurifier $purifier
     */
    public function __construct(\HTMLPurifier $purifier)
    {
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
            
            array_walk_recursive($data, function(&$value, $key) use ($purifier) {
                $value = $this->purifier->purify($value);
            });
            
        }
        
        return $data;
    }
}