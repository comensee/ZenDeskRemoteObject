<?php

namespace ZenDesk\Exception;

use RestRemoteObject\Client\Rest\Exception\ResponseErrorException;

class RecordInvalidException extends ResponseErrorException implements ExceptionInterface
{

}
