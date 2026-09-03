<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exceptions\Exception;

class TestNoTagCustom600Exception extends Custom600Exception
{
    public function __construct(
        /**
         * @var \Psr\Http\Message\ResponseInterface|null
         */
        private readonly ?\Psr\Http\Message\ResponseInterface $response = null
    )
    {
        parent::__construct('New update available');
    }
    public function getResponse(): ?\Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}