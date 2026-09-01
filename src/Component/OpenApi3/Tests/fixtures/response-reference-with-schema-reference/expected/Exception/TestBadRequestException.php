<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class TestBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Failure
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\Model\Failure $failure,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Bad Request');
    }
    public function getFailure(): \Jane\Component\OpenApi3\Tests\Expected\Model\Failure
    {
        return $this->failure;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}