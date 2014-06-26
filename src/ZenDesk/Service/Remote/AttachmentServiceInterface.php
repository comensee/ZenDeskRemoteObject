<?php

namespace ZenDesk\Service\Remote;

use ZenDesk\Entity\Consumable\File;

interface AttachmentServiceInterface
{
    /**
     * @rest\http POST
     * @rest\uri /uploads?filename=%file
     * @param  File                       $file
     * @return \ZenDesk\Entity\Attachment
     */
    public function upload(File $file);

    /**
     * @rest\http GET
     * @rest\uri /attachments/%id
     * @param  int                        $id
     * @return \ZenDesk\Entity\Attachment
     */
    public function get($id);
}
