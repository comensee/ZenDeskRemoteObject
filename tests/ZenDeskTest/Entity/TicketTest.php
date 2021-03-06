<?php

namespace ZenDeskTest\Entity;

use ZenDesk\Entity\Comment;
use ZenDesk\Entity\Consumable\File;
use ZenDeskTest\AbstractTestCase;
use ZenDesk\Entity\Ticket;

class TicketTest extends AbstractTestCase
{
    /** @var \ZenDesk\Entity\Ticket */
    protected static $ticket;

    public function testCanSerialize()
    {
        $ticket = new Ticket();

        $ticket->setId(1);

        $this->assertNotNull($ticket->getId());

        $ticket = unserialize(serialize($ticket));

        $this->assertNotNull($ticket->getId());
    }

    public function testCanCreateTicket()
    {
        $ticket = new Ticket();
        /** @var \ZenDesk\Service\TicketService $service */
        $service = $this->getSM()->get('ZenDesk\Service\TicketService');

        $this->assertEquals($ticket->getId(), null);

        $ticket->setTags(array('foo', 'bar'));
        $ticket->setSubject('New ticket test');
        $ticket->setDescription('Comment #1');
        $service->persist($ticket);

        $this->assertNotNull($ticket->getId());
        $this->assertNotNull($ticket->getRemoteService());
        $this->assertNotNull($ticket->getRequesterId());
        $this->assertEquals($ticket->getStatus(), Ticket::STATUS_OPEN);
        $this->assertEquals($ticket->getDescription(), 'Comment #1');

        $tags = $ticket->getTags();
        $list = array();
        foreach ($tags as $tag) {
            $list[] = $tag->getName();
        }
        $this->assertEquals($list, array('bar', 'foo'));

        self::$ticket = $ticket;
    }

    public function testCanUpdateATicket()
    {
        if (!self::$ticket) {
            $this->markTestSkipped('Ticket entity must be defined');
        }

        $ticket = self::$ticket;
        $updatedAt = $ticket->getUpdatedAt();

        $ticket->setTags(array('baz'));
        $ticket->save();

        $this->assertNotEquals($updatedAt, $ticket->getUpdatedAt());

        $tags = $ticket->getTags();
        $list = array();
        foreach ($tags as $tag) {
            $list[] = $tag->getName();
        }
        $this->assertEquals(array('baz'), $list);
    }

    public function testCanAddSeveralCommentsToATicket()
    {
        if (!self::$ticket) {
            $this->markTestSkipped('Ticket entity must be defined');
        }

        $ticket = self::$ticket;

        $newComments = array();
        for ($i = 0; $i < 3; $i++) {
            $comment = new Comment();
            $comment->setBody('Comment number ' . $i);
            $newComments[] = $comment;
        }

        $numComments = count($ticket->getComments());

        $ticket->enqueueComments($newComments);
        $ticket->save();

        $comments = $ticket->getComments();
        $this->assertCount($numComments+count($newComments), $comments); // original comment + new comments
    }

    public function testCanGetAddCommentWithAttachment()
    {
        if (!self::$ticket) {
            $this->markTestSkipped('Ticket entity must be defined');
        }

        $ticket = self::$ticket;

        $numComments = count($ticket->getComments());

        $file = new File();
        $file->setFilename('foo.txt');
        $file->setContent('bar');

        /** @var \ZenDesk\Service\AttachmentService $attachmentService */
        $attachmentService = $this->getSM()->get('ZenDesk\Service\AttachmentService');
        $attachment = $attachmentService->upload($file);

        $comment = new Comment();
        $comment->setBody('comment with attachment');
        $comment->addAttachment($attachment);

        $ticket->enqueueComment($comment);
        $ticket->save();

        $comments = $ticket->getComments();
        $this->assertCount($numComments+1, $comments); // original comment + new comments
    }

    public function testCanGetTags()
    {
        if (!self::$ticket) {
            $this->markTestSkipped('Ticket entity must be defined');
        }

        $ticket = self::$ticket;

        $tags = $ticket->getTags();
        $this->assertNotEquals(0, count($tags));

        $freshTags = $ticket->getTags(true);
        $this->assertEquals(count($freshTags), count($tags));
    }

    public function testCanCloseATicket()
    {
        if (!self::$ticket) {
            $this->markTestSkipped('Ticket entity must be defined');
        }

        $ticket = self::$ticket;
        $status = $ticket->getStatus();
        $this->assertNotEquals('closed', $status);

        $ticket->close();

        $this->assertEquals('closed', $ticket->getStatus());
    }

    public function testCanDeleteATicket()
    {
        if (!self::$ticket) {
            $this->markTestSkipped('Ticket entity must be defined');
        }

        $ticket = self::$ticket;
        $ticket->delete();

        // to change, tests crossed
        $this->setExpectedException('ZenDesk\Exception\RecordNotFoundException');
        /** @var \ZenDesk\Service\TicketService $service */
        $service = $this->getSM()->get('ZenDesk\Service\TicketService');
        $service->get($ticket->getId());
    }
}
