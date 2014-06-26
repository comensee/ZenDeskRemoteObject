<?php

namespace ZenDesk\Exception;

use RestRemoteObject\Client\Rest\Exception\ResponseErrorException;

class RecordNotFoundException extends ResponseErrorException implements ExceptionInterface
{

}
