<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Exceptions\Exception;

class TestNoTagCustom600Exception extends Custom600Exception
{
    public function __construct(
        /**
         * @var \Symfony\Contracts\HttpClient\ResponseInterface|null
         */
        private readonly ?\Symfony\Contracts\HttpClient\ResponseInterface $response = null
    )
    {
        parent::__construct('New update available');
    }
    public function getResponse(): ?\Symfony\Contracts\HttpClient\ResponseInterface
    {
        return $this->response;
    }
}