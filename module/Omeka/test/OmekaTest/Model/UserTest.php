<?php
namespace OmekaTest\Model;

use Omeka\Model\Entity\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    protected $user;

    public function setUp()
    {
        $this->user = new User;
    }

    public function testInitialState()
    {
        $this->assertNull($this->user->getId());
        $this->assertNull($this->user->getUsername());
        $this->assertNull($this->user->getName());
        $this->assertNull($this->user->getCreated());
        $this->assertNull($this->user->getEmail());
    }

    public function testSetState()
    {
        $this->user->setUsername('username');
        $this->assertEquals('username', $this->user->getUsername());
        $this->user->setName('name');
        $this->assertEquals('name', $this->user->getName());
        $this->user->setEmail('test@example.com');
        $this->assertEquals('test@example.com', $this->user->getEmail());
    }
}
