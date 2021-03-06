<?php

namespace ZenDeskTestAssets;

use Zend\Http\Headers;
use ZenDesk\Rest\Client\Http\Client;

use Zend\Http\Request;
use Zend\Http\Response;
use ZenDeskTest\AbstractTestCase;

class CacheHttpClient extends Client
{
    /**
     * Send HTTP request
     *
     * @param  Request  $request
     * @return Response
     */
    public function send(Request $request = null)
    {
        static $callNumber = array();

        if (!$request) {
            $request = $this->getRequest();
        }

        // create unique cache identifier
        $cache = __DIR__ . '/cache/'
                         . AbstractTestCase::$testName . '-'
                         . $request->getMethod() . '-'
                         . strtr($request->getUri()->getPath(), '/', '-');

        // add params to ensure identifier is unique
        $query = $request->getQuery()->toString();
        if ($query) {
            $cache .= '-' . md5($request->getQuery()->toString());
        } elseif ($request->isPost()) {
            $cache .= '-' . md5($request->getPost()->toString());
        } elseif ($request->isPut()) {
            $cache .= '-' . md5($request->getContent());
        }

        // guard multiple call in same function
        if (isset($callNumber[$cache])) {
            $cache .= $callNumber[$cache]++;
        }

        // init call number
        $callNumber[$cache] = 1;

        if (file_exists($cache)) {
            $data = explode('@@@@@', base64_decode(file_get_contents($cache)));

            $response = new Response();
            $response->setHeaders(Headers::fromString($data[0]));
            $response->setContent($data[1]);

            return $response;
        }

        $response = parent::send($request);

        $body = $response->getBody();
        $headers = clone $response->getHeaders();
        $encoding = $headers->get('Content-Encoding');
        if ($encoding) {
            $headers->removeHeader($encoding);
        }

        $data = array(
            $headers->toString(),
            $body,
        );

        file_put_contents($cache, base64_encode(implode('@@@@@', $data)));

        return $response;
    }

    public static function deprecate($name)
    {
        $paths = glob(__DIR__ . '/cache/' . $name . '*');
        foreach ($paths as $path) {
            unlink($path);
        }
    }

    public static function getUniqId()
    {
        $cache = __DIR__ . '/cache/uniqid';
        if (file_exists($cache)) {
            return file_get_contents($cache);
        }

        $uniqId = uniqid();
        file_put_contents($cache, $uniqId);

        return $uniqId;
    }
}
