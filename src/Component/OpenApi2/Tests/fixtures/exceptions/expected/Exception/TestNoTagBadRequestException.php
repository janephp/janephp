<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class TestNoTagBadRequestException extends \RuntimeException implements ClientException
{
    private $error;
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\Model\Error $error)
    {
        parent::__construct('Bad request on test exception', 400);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}