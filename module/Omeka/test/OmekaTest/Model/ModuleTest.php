<?php
namespace OmekaTest\Model;

use Omeka\Model\Entity\Module;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    protected $module;

    public function setUp()
    {
        $this->module = new Module;
    }

    public function testInitialState()
    {
        $this->assertNull($this->module->getId());
        $this->assertFalse($this->module->getIsActive());
    }

    public function testSetState()
    {
        $this->module->setId('TestModule');
        $this->module->setIsActive(true);
        $this->assertEquals('TestModule', $this->module->getId());
        $this->assertEquals(true, $this->module->getIsActive());
    }
}
