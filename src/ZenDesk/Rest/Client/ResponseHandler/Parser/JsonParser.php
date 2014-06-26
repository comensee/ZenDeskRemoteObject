<?php

namespace ZenDesk\Rest\Client\ResponseHandler\Parser;

use RestRemoteObject\Client\Rest\Context;
use RestRemoteObject\Client\Rest\ResponseHandler\Parser\JsonParser as BaseJsonParser;
use RestRemoteObject\Client\Rest\Exception\ResponseErrorException;

class JsonParser extends BaseJsonParser
{
    /**
     * Parse response content
     *
     * @param  string                 $content
     * @param  Context                $context
     * @return array|object
     * @throws ResponseErrorException
     */
    public function parse($content, Context $context)
    {
        $content = json_decode($content, true);

        $descriptor = $context->getResourceDescriptor();
        if (
            $descriptor->getClassName() == 'ZenDesk\Service\Remote\AttachmentServiceInterface' &&
            $descriptor->getMethodName() == 'upload'
        ) {
            return array_merge(array(
                'token' => $content['upload']['token']
            ), $content['upload']['attachments'][0]);
        }

        $descriptor = $context->getResourceDescriptor();
        if (!$descriptor->isReturnAsArray()) {
            if (!$content) {
                return null;
            }

            return current($content);
        }

        foreach ($content as $data) {
            if (is_array($data)) {
                return $data;
            }
        }

        return $content;
    }
}
