<?php

namespace Jane\Component\OpenApi31\Tests\StatusCodeRange\Exception;

class GetFooNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Not found');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}