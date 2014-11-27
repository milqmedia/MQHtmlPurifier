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
 
namespace MQHtmlpurifier\View\Helper;

use Zend\Http\Request;
use Zend\View\Helper\AbstractHelper;

class Purify extends AbstractHelper
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
     * @param string $dirtyHtml
     *
     * @return string
     */
    public function __invoke($dirtyHtml)
    {
        return $this->purifier->purify($dirtyHtml);
    }
}
