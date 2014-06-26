<?php

namespace ZenDeskTest\Service\Feature;

use PHPUnit_Framework_TestCase;

use ZenDesk\Service\Feature\UserServiceAwareTrait;

class UserServiceAwareTest extends PHPUnit_Framework_TestCase
{
    use UserServiceAwareTrait;

    public function testCannotAccessServiceWithoutInit()
    {
        $this->setExpectedException('Zend\Stdlib\Exception\LogicException');
        $this->getUserService();
    }

    public function testCanGetAndSetService()
    {
        $service = $this->getMockBuilder('ZenDesk\Service\UserService')->disableOriginalConstructor()->getMock();
        $this->setUserService($service);
        $this->assertEquals($service, $this->getUserService());
    }
}
