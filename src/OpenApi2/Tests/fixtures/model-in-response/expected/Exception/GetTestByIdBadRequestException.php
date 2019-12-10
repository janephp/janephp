<?php

namespace Jane\OpenApi2\Tests\Expected\Exception;

class GetTestByIdBadRequestException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\Jane\OpenApi2\Tests\Expected\Model\Error $error)
    {
        parent::__construct('bad request', 400);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}
