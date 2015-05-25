<?php

/**
 * @coversDefaultClass \Dracony\Demo\Hello
 */
class HelloTest extends \PHPUnit_Framework_TestCase
{
    protected $hello;
    
    public function setUp()
    {
        $this->hello = new \Dracony\Demo\Hello();
    }
    
    /**
     * @covers ::world
     */
    public function testWorld()
    {
        $this->assertSame('world', $this->hello->world());
    }
}