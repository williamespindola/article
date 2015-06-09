<?php

use WilliamEspindola\Article\Storage\ORM\RespectRelational;

class RespectRelationalTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->mapper = $this->getMockBuilder('Respect\Relational\Mapper')
                            ->disableOriginalConstructor()
                            ->getMock();
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSetMapperWithInvalidParameterShouldThrownAndInvalidArgumentException()
    {
        $instance = new RespectRelational($this->mapper);

        $instance->setMapper('bla');
    }

    public function testSetMapperWithValidParameterShouldReturnMapperInGetMapper()
    {
        $instance = new RespectRelational($this->mapper);

        $instance->setMapper($this->mapper);

        $this->assertInstanceOf('Respect\Relational\Mapper', $instance->getMapper());
    }
}
