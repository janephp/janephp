<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestBadRequestException extends BadRequestException
{
    /**
     * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Failure
     */
    private $failure;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi3\Tests\Expected\Model\Failure $failure, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->failure = $failure;
        $this->response = $response;
    }
    public function getFailure() : \Jane\Component\OpenApi3\Tests\Expected\Model\Failure
    {
        return $this->failure;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}