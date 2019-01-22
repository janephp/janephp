<?php

namespace Jane\OpenApi\Tests\Expected\Exception;

class GetTestBadRequestException extends \RuntimeException implements ClientException
{
    private $error;
    function __construct(\Jane\OpenApi\Tests\Expected\Model\Error $error)
    {
        parent::__construct('bad request', 400);
        $this->error = $error;
    }
    function getError()
    {
        return $this->error;
    }
}