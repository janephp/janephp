<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class GetTestByIdNotFoundException extends NotFoundException
{
    private $error;
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\Model\Error $error)
    {
        parent::__construct('not found', 404);
        $this->error = $error;
    }
    public function getError()
    {
        return $this->error;
    }
}