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
 
use MQHtmlpurifier\View\Helper\Purify;
use MQHtmlpurifier\Module;

class PurifyTest extends \PHPUnit_Framework_TestCase
{
    /** @var Purify */
    protected $sut;

    /** @var \HTMLPurifier */
    protected $mockPurifier;

    public function setUp()
    {
        Module::setConstants();

        /** @var \HTMLPurifier $mockPurifier  */
        $this->mockPurifier = $this->getMock('\HTMLPurifier');

        $this->sut = new Purify($this->mockPurifier);
    }

    public function testSetPurifierGetsCalledOnInvoke()
    {
        // ----------------------------------------------------------------
        // setup test parameters
        //
        $dirtyHtml = 'dirtyHtml';
        $expected = 'purified-glorified!';

        // ----------------------------------------------------------------
        // setup mock expectations
        //
        $this->mockPurifier
            ->expects($this->once())
            ->method('purify')
            ->with($dirtyHtml)
            ->will($this->returnValue($expected));

        // ----------------------------------------------------------------
        // execute
        //
        $sut = $this->sut;
        $actual = $sut($dirtyHtml);

        // ----------------------------------------------------------------
        // test the results
        //
        $this->assertEquals($actual, $expected);
    }
}