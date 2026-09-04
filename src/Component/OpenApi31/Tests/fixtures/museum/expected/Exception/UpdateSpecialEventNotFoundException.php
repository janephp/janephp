<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Exception;

class UpdateSpecialEventNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error $error,
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface
         */
        private readonly \Symfony\Contracts\HttpClient\ResponseInterface $response
    )
    {
        parent::__construct('Not found.');
    }
    public function getError(): \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}