<?php

namespace Jane\OpenApi\Tests\Expected\Exception;

class GetTestNotFoundException extends \RuntimeException implements ClientException
{
    private $error;
    function __construct(\Jane\OpenApi\Tests\Expected\Model\Error $error)
    {
        parent::__construct('not found', 404);
        $this->error = $error;
    }
    function getError()
    {
        return $this->error;
    }
}