<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Museum\Exception;

class CreateSpecialEventNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error
         */
        private readonly \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error $error,
        /**
         * @var \Psr\Http\Message\ResponseInterface
         */
        private readonly \Psr\Http\Message\ResponseInterface $response
    )
    {
        parent::__construct('Not found.');
    }
    public function getError(): \Jane\Component\OpenApi31\Tests\Expected\Museum\Model\Error
    {
        return $this->error;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}