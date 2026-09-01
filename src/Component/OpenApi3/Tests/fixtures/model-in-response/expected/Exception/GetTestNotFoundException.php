<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Exception;

class GetTestNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error
         */
        private readonly \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error $error,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('not found');
    }
    public function getError(): \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}