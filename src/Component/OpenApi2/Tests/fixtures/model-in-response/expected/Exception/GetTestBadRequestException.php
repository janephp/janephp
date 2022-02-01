<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exception;

class GetTestBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi2\Tests\Expected\Model\Error
     */
    private $error;
    public function __construct(\Jane\Component\OpenApi2\Tests\Expected\Model\Error $error)
    {
        parent::__construct('bad request');
        $this->error = $error;
    }
    public function getError() : \Jane\Component\OpenApi2\Tests\Expected\Model\Error
    {
        return $this->error;
    }
}