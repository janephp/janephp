<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetTestByIdBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\Model\Error
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\Model\Error $error,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('bad request');
    }
    public function getError(): \Jane\Component\OpenApi3\Tests\Expected\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}