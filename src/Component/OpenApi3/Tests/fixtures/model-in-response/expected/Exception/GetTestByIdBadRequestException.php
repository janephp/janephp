<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception;

class GetTestByIdBadRequestException extends BadRequestException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error $error,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('bad request');
    }
    public function getError(): \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}