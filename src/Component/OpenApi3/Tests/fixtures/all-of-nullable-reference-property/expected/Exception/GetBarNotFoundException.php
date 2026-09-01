<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Exception;

class GetBarNotFoundException extends NotFoundException
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('Resource not found');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}