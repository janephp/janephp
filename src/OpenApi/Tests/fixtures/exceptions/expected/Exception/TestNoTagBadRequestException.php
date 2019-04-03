<?php

namespace Jane\OpenApi\Tests\Expected\Exception;

class TestNoTagBadRequestException extends \RuntimeException implements ClientException
{
    private $error;
    function __construct(\Jane\OpenApi\Tests\Expected\Model\Error $error)
    {
        parent::__construct('Bad request on test exception', 400);
        $this->error = $error;
    }
    function getError()
    {
        return $this->error;
    }
}