<?php

namespace ZenDeskTest\Entity;

use ZenDesk\Entity\Attachment;

use ZenDesk\Entity\Consumable\File;
use ZenDeskTest\AbstractTestCase;

class AttachmentTest extends AbstractTestCase
{
    /** @var Attachment */
    protected static $attachment;

    public function testCanSerialize()
    {
        $attachment = new Attachment();

        $attachment->setId(1);

        $this->assertNotNull($attachment->getId());

        $attachment = unserialize(serialize($attachment));

        $this->assertNotNull($attachment->getId());
    }

    public function testCanCreateAnAttachment()
    {
        $file = new File();
        $file->attachFile(__DIR__ . '/../../ZenDeskTestAssets/assets/AttachmentTest.txt');

        /** @var \ZenDesk\Service\AttachmentService $service */
        $service = $this->getSM()->get('ZenDesk\Service\AttachmentService');

        $attachment = $service->upload($file);

        $this->assertNotNull($attachment->getId());
        $this->assertNotNull($attachment->getRemoteService());

        self::$attachment = $attachment;
    }

    public function testCanGetAttachment()
    {
        $attachment = self::$attachment;
        if (!$attachment) {
            $this->markTestSkipped('Attachment entity must be defined');
        }

        /** @var \ZenDesk\Service\AttachmentService $service */
        $service = $this->getSM()->get('ZenDesk\Service\AttachmentService');
        $attachment = $service->get($attachment->getId());

        $this->assertInstanceOf('ZenDesk\Entity\Attachment', $attachment);
        $this->assertNotNull($attachment->getId());
    }
}
