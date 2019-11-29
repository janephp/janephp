<?php

namespace Jane\OpenApi2\Tests\Expected\Exception;

class GetTestNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\Jane\OpenApi2\Tests\Expected\Model\Error $error)
    {
        parent::__construct('not found', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}
