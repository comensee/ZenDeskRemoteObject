<?php

namespace ZenDeskTest\Service\Feature;

use PHPUnit_Framework_TestCase;

use ZenDesk\Service\Feature\TicketServiceAwareTrait;

class TicketServiceAwareTest extends PHPUnit_Framework_TestCase
{
    use TicketServiceAwareTrait;

    public function testCannotAccessServiceWithoutInit()
    {
        $this->setExpectedException('Zend\Stdlib\Exception\LogicException');
        $this->getTicketService();
    }

    public function testCanGetAndSetService()
    {
        $service = $this->getMockBuilder('ZenDesk\Service\TicketService')->disableOriginalConstructor()->getMock();
        $this->setTicketService($service);
        $this->assertEquals($service, $this->getTicketService());
    }
}
