<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Failure
     */
    private $failure;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Failure $failure)
    {
        parent::__construct('Bad Request');
        $this->failure = $failure;
    }
    public function getFailure() : \Jane\Component\OpenApi3\Tests\Expected\Model\Failure
    {
        return $this->failure;
    }
}