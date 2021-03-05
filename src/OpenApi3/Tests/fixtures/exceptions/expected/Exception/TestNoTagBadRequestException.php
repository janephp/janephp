<?php

namespace Jane\OpenApi3\Tests\Expected\Exception;

class TestNoTagBadRequestException extends BadRequestException
{
    private $error;
    public function __construct(\Jane\OpenApi3\Tests\Expected\Model\Error $error)
    {
        parent::__construct('Bad request on test exception', 400);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}