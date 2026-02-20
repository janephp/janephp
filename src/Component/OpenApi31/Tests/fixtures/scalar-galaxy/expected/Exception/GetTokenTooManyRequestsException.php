<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Exception;

class GetTokenTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var \Jane\Component\OpenApi31\Tests\Expected\Model\TooManyRequestsError
     */
    private $tooManyRequestsError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Jane\Component\OpenApi31\Tests\Expected\Model\TooManyRequestsError $tooManyRequestsError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Too Many Requests');
        $this->tooManyRequestsError = $tooManyRequestsError;
        $this->response = $response;
    }
    public function getTooManyRequestsError(): \Jane\Component\OpenApi31\Tests\Expected\Model\TooManyRequestsError
    {
        return $this->tooManyRequestsError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}