<?php

namespace ZenDesk\Service;

use ZenDesk\Entity\Consumable\File;
use ZenDesk\Service\Remote\AttachmentServiceInterface;

class AttachmentService extends AbstractService
{
    /**
     * @param  File                       $file
     * @return \ZenDesk\Entity\Attachment
     */
    public function upload(File $file)
    {
        /** @var AttachmentServiceInterface $remoteService */
        $remoteService = $this->getRemoteService();
        $attachment = $remoteService->upload($file);

        // inject remote service
        $attachment->setRemoteService($this->getRemoteService());

        return $attachment;
    }

    /**
     * @param $id
     * @return \ZenDesk\Entity\Attachment
     */
    public function get($id)
    {
        /** @var AttachmentServiceInterface $remoteService */
        $remoteService = $this->getRemoteService();

        return $remoteService->get($id);
    }
}
