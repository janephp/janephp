<?php

namespace Jane\Component\OpenApi2\Tests\Client\Exception;

class DeleteThingNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi2\Tests\Client\Model\Error
         */
        private readonly \Jane\Component\OpenApi2\Tests\Client\Model\Error $error,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Thing not found');
    }
    public function getError(): \Jane\Component\OpenApi2\Tests\Client\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}