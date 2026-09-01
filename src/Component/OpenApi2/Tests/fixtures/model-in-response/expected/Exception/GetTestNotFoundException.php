<?php

namespace Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Exception;

class GetTestNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Error
         */
        private readonly \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Error $error,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('not found');
    }
    public function getError(): \Jane\Component\OpenApi2\Tests\Expected\ModelInResponse\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}