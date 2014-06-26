<?php

namespace ZenDesk\Rest\Client\ResponseHandler\Guardian;

use RestRemoteObject\Client\Rest\ResponseHandler\Guardian\GuardianInterface;

use Zend\Http\Response;

class HeadersAndContentGuardian implements GuardianInterface
{
    /**
     * @var array
     */
    protected $warningHeaders = array();

    /**
     * @param array $warningHeaders
     */
    public function __construct(array $warningHeaders = array())
    {
        $this->warningHeaders = $warningHeaders;
    }

    /**
     * @param  Response                                                       $response
     * @throws \RestRemoteObject\Client\Rest\Exception\ResponseErrorException
     */
    public function guard(Response $response)
    {
        $headers = $response->getHeaders();
        foreach ($this->warningHeaders as $errorsHeader) {
            $header = $headers->get($errorsHeader);
            if ($header) {
                trigger_error(sprintf('Warning header found "%s"', $header->getFieldValue()), E_USER_WARNING);
            }
        }

        $content = $response->getBody();

        $content = json_decode($content, true);
        if (isset($content['error'])) {
            $message = null;
            if (isset($content['message'])) {
                $message = $content['message'];
            } elseif (isset($content['description'])) {
                $message = $content['description'] .'. ';
                if (isset($content['details'])) {
                    foreach ($content['details'] as $type) {
                        foreach ($type as $msg) {
                            $message .= $msg['description'] . '. ';
                        }
                    }
                }
            }

            $exceptionClass = 'RestRemoteObject\Client\Rest\Exception\ResponseErrorException';
            if ($content['error'] == 'RecordNotFound') {
                $exceptionClass = 'ZenDesk\Exception\RecordNotFoundException';
            } elseif ($content['error'] == 'RecordInvalid') {
                $exceptionClass = 'ZenDesk\Exception\RecordInvalidException';
                if (isset($content['details']['email'])) {
                    $exceptionClass = 'ZenDesk\Exception\RecordInvalid\ExistingUserEmailException';
                }
            }

            if (is_array($message)) {
                $message = implode('. ', $message);
            }

            throw new $exceptionClass(sprintf('API Error "%s"', $message));
        }
    }
}
