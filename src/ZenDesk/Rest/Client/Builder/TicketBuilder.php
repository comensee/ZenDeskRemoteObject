<?php

namespace ZenDesk\Rest\Client\Builder;

use RestRemoteObject\Client\Rest\Context;
use RestRemoteObject\Client\Rest\Builder\AbstractBuilder;

class TicketBuilder extends AbstractBuilder
{
    protected $relatedClass = 'ZenDesk\Service\Remote\TicketServiceInterface';

    public function persist(Context $context)
    {
        $params = $context->getResourceBinder()->getParams();
        /** @var \ZenDesk\Entity\Ticket $ticket */
        $ticket = $params[0];
        $user = $ticket->getRequester();

        $tags = $ticket->getTags();
        $list = array();
        foreach ($tags as $tag) {
            $list[] = $tag->getName();
        }

        $data = array(
            'ticket' => array(
                'subject' => $ticket->getSubject(),
                'comment' => array(
                    'body' => $ticket->getDescription(),
                ),
                'tags' => $list,
                'type' => $ticket->getType(),
                'status' => $ticket->getStatus(),
                'priority' => $ticket->getPriority(),
            ),
        );

        if ($user) {
            $data['ticket']['requester'] = array(
                'name' => $user->getName(),
                'email' => $user->getEmail(),
            );
            if ($user->getId()) {
                $data['ticket']['submitter_id'] = $user->getId();
            }
        } elseif ($ticket->getRequesterId()) {
            $data['ticket']['submitter_id'] = $ticket->getRequesterId();
        }

        $customFields = $ticket->getCustomFields();
        if ($customFields) {
            $data['ticket']['custom_fields'] = $customFields;
        }

        $context
            ->getResourceBinder()
            ->setParams(json_encode($data));
    }

    public function save(Context $context)
    {
        $params = $context->getResourceBinder()->getParams();
        /** @var \ZenDesk\Entity\Ticket $ticket */
        $ticket = $params[0];

        $tags = $ticket->getTags();
        $list = array();
        foreach ($tags as $tag) {
            $list[] = $tag->getName();
        }

        $data = array(
            'ticket' => array(
                'subject' => $ticket->getSubject(),
                'tags' => $list,
                'type' => $ticket->getType(),
                'status' => $ticket->getStatus(),
                'priority' => $ticket->getPriority(),
            ),
        );

        $comment = $ticket->dequeueComment();

        if ($comment) {
            $attachmentsId = array();
            $attachments = $comment->getAttachments();
            foreach ($attachments as $attachment) {
                $attachmentsId[] = $attachment->getToken();
            }

            $data['ticket']['comment'] = array(
                'body' => $comment->getBody(),
                'author_id' => $comment->getAuthorId(),
                'uploads' => $attachmentsId,
            );
        }

        $context
            ->getResourceBinder()
            ->setParams(json_encode($data));
    }

    public function close(Context $context)
    {
        $data = array(
            'ticket' => array(
                'status' => 'closed',
            ),
        );

        $context
            ->getResourceBinder()
            ->setParams(json_encode($data));
    }
}
