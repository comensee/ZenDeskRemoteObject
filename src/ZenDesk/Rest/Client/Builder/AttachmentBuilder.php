<?php

namespace ZenDesk\Rest\Client\Builder;

use RestRemoteObject\Client\Rest\Context;
use RestRemoteObject\Client\Rest\Builder\AbstractBuilder;

class AttachmentBuilder extends AbstractBuilder
{
    protected $relatedClass = 'ZenDesk\Service\Remote\AttachmentServiceInterface';

    public function upload(Context $context)
    {
        $params = $context->getResourceBinder()->getParams();
        /** @var \ZenDesk\Entity\Consumable\File $file */
        $file = $params[0];
        $data = $file->getContent();

        $context
            ->getResourceBinder()
            ->setParams($data);
    }
}
