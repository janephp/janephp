<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class GetTestBadRequestException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\Model\Error $error)
    {
        parent::__construct('bad request', 400);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}