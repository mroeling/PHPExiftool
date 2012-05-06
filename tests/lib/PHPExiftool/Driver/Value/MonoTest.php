<?php

namespace PHPExiftool\Driver\Value;

class MonoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Mono
     */
    protected $object;

    /**
     * @covers PHPExiftool\Driver\Value\Mono::__construct
     */
    protected function setUp()
    {
        $this->object = new Mono('Hello !');
    }

    /**
     * @covers PHPExiftool\Driver\Value\Mono::getType
     */
    public function testGetType()
    {
        $this->assertEquals(Value::TYPE_MONO, $this->object->getType());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Mono::asString
     */
    public function testAsString()
    {
        $this->assertEquals('Hello !', $this->object->asString());
    }

    /**
     * @covers PHPExiftool\Driver\Value\Mono::set
     */
    public function testSetValue()
    {
        $this->object->set('World !');
        $this->assertEquals('World !', $this->object->asString());
    }
}
