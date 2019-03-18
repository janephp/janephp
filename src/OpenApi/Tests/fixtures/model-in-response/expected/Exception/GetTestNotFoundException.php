<?php

namespace Jane\OpenApi\Tests\Expected\Exception;

class GetTestNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\Jane\OpenApi\Tests\Expected\Model\Error $error)
    {
        parent::__construct('not found', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}